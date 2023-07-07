


<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('category_id', 'Category ID') }}
            {{ Form::select('category_id', $categories->pluck('name', 'id'), $game->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Select category', 'id' => 'category-select']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('team1_id', 'Team1 ID') }}
            {{ Form::select('team1_id', $teams->pluck('name', 'id'), $game->team1_id, ['class' => 'form-control' . ($errors->has('team1_id') ? ' is-invalid' : ''), 'placeholder' => 'Select Team1']) }}
            {!! $errors->first('team1_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('team2_id', 'Team2 ID') }}
            {{ Form::select('team2_id', $teams->pluck('name', 'id'), $game->team2_id, ['class' => 'form-control' . ($errors->has('team2_id') ? ' is-invalid' : ''), 'placeholder' => 'Select Team2']) }}
            @if($errors->has('team1_id') && $errors->has('team2_id') && !$errors->has('category_id'))
                @if($errors->get('team1_id')[0] === $errors->get('team2_id')[0])
                    <div class="text-danger">Teams cannot have the same name or ID.</div>
                @else
                    @php
                        $team1CategoryId = $teams->where('id', $game->team1_id)->pluck('category_id')->first();
                        $team2CategoryId = $teams->where('id', $game->team2_id)->pluck('category_id')->first();
                    @endphp
                    @if($team1CategoryId !== $team2CategoryId)
                        <div class="text-danger">Teams belong to different categories.</div>
                    @endif
                @endif
            @endif
            {!! $errors->first('team2_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('game_winner', 'Game Winner') }}
            {{ Form::text('game_winner', $game->game_winner, ['class' => 'form-control' . ($errors->has('game_winner') ? ' is-invalid' : ''), 'placeholder' => 'Game Winner']) }}
            {!! $errors->first('game_winner', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('game_date', 'Game Date') }}
            {{ Form::text('game_date', $game->game_date, ['class' => 'form-control' . ($errors->has('game_date') ? ' is-invalid' : ''), 'placeholder' => 'Game Date']) }}
            {!! $errors->first('game_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>


<script>
    // Obtener referencia al campo de selección de categoría
    const categorySelect = document.getElementById('category-select');
    // Obtener referencia al campo de selección de equipo 2
    const team2Select = document.getElementById('team2-id');

    // Función para filtrar los equipos según la categoría seleccionada
    function filterTeamsByCategory() {
        const selectedCategoryId = categorySelect.value;
        const teamsByCategory = {!! $teamsByCategory !!}[selectedCategoryId];
        const options = teamsByCategory.map(team => `<option value="${team.id}">${team.name}</option>`);
        team2Select.innerHTML = `<option value="">Select Team2</option>` + options.join('');
    }

    // Asignar el evento de cambio a la selección de categoría
    categorySelect.addEventListener('change', filterTeamsByCategory);

    // Filtrar inicialmente los equipos al cargar la página
    filterTeamsByCategory();
</script>
