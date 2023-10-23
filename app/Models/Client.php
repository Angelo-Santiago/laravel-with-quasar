<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Supports\Dates;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'brirth'
    ];

    protected $casts = [
        'brirth'=> 'date:d/m/Y'
    ];

    public function setBrirthAttribute($value)
    {
        $this->attributes['brirth'] = Dates::transformDateBrazilForAmerican($value);
    }
    
}
