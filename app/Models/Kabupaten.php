<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kabupaten';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Relationships with other models
     */
    public function kecamatan()
    {
        return $this->hasMany('App\Models\Kecamatan');
    }

    public function provinsi()
    {
        return $this->belongsTo('App\Models\Provinsi');
    }
}
