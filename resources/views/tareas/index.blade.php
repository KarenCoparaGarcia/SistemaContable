@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-8">
                            {{ __('Tareas Registradas') }}
                        </div>
                        <div class="col-sm-2 text-center">
                            <a href="{{ route('task.create') }}" class="btn btn-primary btn-sm">Create</a>
                        </div>
                        <div class="col-sm-2 text-center">
                            <a href="{{ route('logs.create') }}" class="btn btn-primary btn-sm">Create Logs</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered text-dark" style="font-family: Times New Roman;font-size: 14px; width:100%;">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Descripción</th>
                                <th>Fecha Máxima</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->descripcion}}</td>
                                @if ($task->fecha_maxima > Carbon\Carbon::now())
                                <td class="text-danger">{{$task->fecha_maxima}}</td>
                                @else
                                <td class="text-success">{{$task->fecha_maxima}}</td>
                                @endif

                                <td>
                                    <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#EditCliente{{$task->id}}">
                                        Edit
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleteCliente{{$task->id}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection