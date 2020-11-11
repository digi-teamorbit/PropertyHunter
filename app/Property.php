<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'properties';

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
    protected $fillable = ['category', 'Name', 'Short_description', 'Property_price', 'Permit_Number', 'Licence_Number', 'Registration_Number', 'BEDROOMS', 'BATHROOMS', 'SIZE', 'detail','image','images','rating'];

    
}
