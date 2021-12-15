@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Logs') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('logs.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="fecha_registro" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Registro') }}</label>
                            <div class="col-md-6">
                                <input id="fecha_registro" type="date" class="form-control @error('fecha_registro') is-invalid @enderror" name="fecha_registro" value="{{ old('fecha_registro') }}" required autofocus>
                                @error('fecha_registro')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="comentario" class="col-md-4 col-form-label text-md-right">{{ __('comentario') }}</label>
                            <div class="col-md-6">
                                <input id="comentario" type="text" class="form-control @error('comentario') is-invalid @enderror" name="comentario" value="{{ old('comentario') }}" required>
                                @error('comentario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-md-4 mb-2">
                                <label for="task_id">Tareas</label>
                                <select id="task_id" style="height:29px;font-family: arial;font-size: 13px;" name="task_id" class="form-control">
                                    <option value="">Seleccionar...</option>
                                    @foreach($tareas as $task)
                                    <option value="{{$task->id}}">{{$task->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection