<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('team1_id') }}
            {{ Form::text('team1_id', $game->team1_id, ['class' => 'form-control' . ($errors->has('team1_id') ? ' is-invalid' : ''), 'placeholder' => 'Team1 Id']) }}
            {!! $errors->first('team1_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('team2_id') }}
            {{ Form::text('team2_id', $game->team2_id, ['class' => 'form-control' . ($errors->has('team2_id') ? ' is-invalid' : ''), 'placeholder' => 'Team2 Id']) }}
            {!! $errors->first('team2_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('start_time') }}
            {{ Form::text('start_time', $game->start_time, ['class' => 'form-control' . ($errors->has('start_time') ? ' is-invalid' : ''), 'placeholder' => 'Start Time']) }}
            {!! $errors->first('start_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>