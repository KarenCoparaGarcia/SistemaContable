<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoice';
    public $timestamps = false;
    protected $fillable = [
        'date',
        'type',
        'total',
        'user_id',
        'seller_id'
    ];
    public function productos()
    {
        return $this->hasMany(Product::class, 'invoice_id','id' );
    }
}
