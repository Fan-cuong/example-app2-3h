<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table='foods';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $fillable=[
        'name',
        'count',
        'category_id',
        'description',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }

}








