<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phones extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'phones';

    protected $fillable = [
                        'name', 
                        'manufacturer',
                        'description', 
                        'color',
                        'price',
                        'imageFileName',
                        'screen',
                        'processor',
                        'ram'
                    ];

}
