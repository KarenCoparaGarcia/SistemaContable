<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Logs;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tareas= Task::where('user_id', Auth::user()->id)->get();
        return view("logs.create", compact('tareas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public static function sendEmail($email_user){
        $details=[
            'title'=>'Tarea creada',
            'body'=>'Se registro la tarea al usuario'
        ];
        Mail::to($email_user)->send(new TestMail($details));
        return "Información Enviada";
    }
    public function store(Request $request)
    {
        $logs = new Logs();
        $logs->fecha_registro= $request->fecha_registro;
        $logs->comentario= $request->comentario;
        $logs->task_id= $request->task_id;
        $email_user= Task::select('users.email')->join('users', 'users.id','=','tasks.user_id')
        ->where('tasks.id',$logs->task_id)->first();
        //dd($email_user->email);
        $logs->save();
        $response= self::sendEmail($email_user->email);
        return $response;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
