<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $table = 'horarios';
    protected $fillable = ['fecha','hora_ingreso','hora_entrada','hora_salida','horas_trabajadas','total_pagar','user_id'];

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
