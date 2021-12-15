<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    public $timestamps = false;

    protected $fillable = [
        'fecha_maxima',
        'descripcion',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function logs()
    {
        return $this->hasMany(Logs::class, 'task_id','id' );
    }
}
