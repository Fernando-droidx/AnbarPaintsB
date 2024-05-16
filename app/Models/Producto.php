<?php


namespace App\Models;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'precio', 'image'];
    
    public function clientes()
    {
        return $this->belongsToMany(Cliente::class)->withPivot('cantidad');
    }
}
