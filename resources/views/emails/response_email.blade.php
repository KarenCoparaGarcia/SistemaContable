@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-8">
                            {{ __('Email Enviado') }}
                        </div>
                        <div class="col-sm-2 text-center">
                            <a href="{{ route('task.index') }}" class="btn btn-primary btn-sm">Create Logs</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h1>Se registro con exito</h1>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection