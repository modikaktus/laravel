<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kecamatan';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Relationships with other models
     */
    public function desa()
    {
        return $this->hasMany('App\Models\Desa');
    }

    public function kabupaten()
    {
        return $this->belongsTo('App\Models\Kabupaten');
    }
}
