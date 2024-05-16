<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['cliente_id', 'producto_id','domicilio_id', 'cantidad'];
    
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function domicilio()
{
    return $this->belongsTo(Domicilio::class);
}

    

}
