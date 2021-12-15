<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;
    protected $table = 'logs';
    public $timestamps = false;

    protected $fillable = [
        'fecha_registro',
        'comentario',
        'task_id'
    ];
    public function tareas()
    {
        return $this->hasMany(Task::class, 'task_id','id' );
    }
}
