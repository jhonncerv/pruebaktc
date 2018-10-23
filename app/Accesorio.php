<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesorio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'nombre',
        'SKU',
        'descripcion',
        'categoria_id',
        'fabricante_id',
        'pais_id'
     ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    /**
     *
     */
    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }

    public function fabricante()
    {
        return $this->belongsTo(Fabricante::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function pdfs()
    {
        return $this->hasMany(Pdf::class);
    }
}
