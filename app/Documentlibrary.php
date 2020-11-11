<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentlibrary extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'documentlibraries';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['doc_title', 'file', 'Type', 'form_category', 'description'];

    
}
