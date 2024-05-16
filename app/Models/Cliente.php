<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nombre', 'email', 'telefono', 'password',];
    
    public function productos()
    {
        return $this->belongsToMany(Producto::class)->withPivot('cantidad');
    }
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
