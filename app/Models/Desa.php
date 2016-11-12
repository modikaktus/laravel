<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'desa';

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
        return $this->belongsTo('App\Models\Kecamatan');
    }
}
