<?php

namespace App\Models\landlord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class landlord_driver_infos extends Model
{
    protected $table='landlord_driver_infos';
    protected $fillable=['l_nid','l_driver_name','l_driver_nid','l_driver_phone','l_driver_prmt_addss'
    ];
}
