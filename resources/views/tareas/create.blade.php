@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tareas Registradas') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('task.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="fecha_maxima" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Máxima') }}</label>
                            <div class="col-md-6">
                                <input id="fecha_maxima" type="date" class="form-control @error('fecha_maxima') is-invalid @enderror" name="fecha_maxima" value="{{ old('fecha_maxima') }}" required autofocus>
                                @error('fecha_maxima')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required>

                                @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-4 mb-2">
                            <label for="user_id">Usuario</label>
                            <select id="user_id" style="height:29px;font-family: arial;font-size: 13px;" name="user_id" class="form-control">
                                <option value="">Seleccionar...</option>
                                @foreach($usuarios as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
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