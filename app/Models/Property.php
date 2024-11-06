<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar de manera masiva (Mass Assignable).
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'descripcion',
        'direccion',
        'precio',
        'cuartos',
        'baños',
        'area',
        'estado',
        'tipo',
        'amueblado',
        'garaje',
        'user_id',
    ];

    /**
     * Relación con las imágenes de la propiedad.
     * Una propiedad puede tener muchas imágenes.
     */
// En el modelo Property.php

public function images()
{
    return $this->hasMany(PropertyImage::class);
}


    /**
     * Relación con el usuario.
     * Una propiedad pertenece a un usuario.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope para filtrar propiedades disponibles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }

    /**
     * Obtener el precio formateado.
     *
     * @return string
     */
    public function getFormattedPriceAttribute()
    {
        return '$' . number_format($this->price, 2);
    }

    /**
     * Obtener si la propiedad está amueblada o no.
     *
     * @return string
     */
    public function getFurnishedStatusAttribute()
    {
        return $this->furnished ? 'Sí' : 'No';
    }
}
