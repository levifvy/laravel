@extends('layouts.plantilla')

@section('template_title')
    {{ __('Update') }} Game
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Game</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('games.update', $game->id) }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @include('games.form')
                            <div class="box-footer mt20">
                                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

