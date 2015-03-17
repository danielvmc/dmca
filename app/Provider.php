<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    /**
     * No timestamps for a provider.
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Fllable fields for a provider.
     * @var [type]
     */
    protected $fillable = [
        'name',
        'copyright_email',
    ];
}
