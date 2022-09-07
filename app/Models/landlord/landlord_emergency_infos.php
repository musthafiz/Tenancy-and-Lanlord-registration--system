<?php

namespace App\Models\landlord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class landlord_emergency_infos extends Model
{
    protected $table='landlord_emergency_infos';
    protected $fillable=['l_nid','l_emergency_name','l_emergency_nid','l_emergency_phone','l_emergency_prmt_addss'
    ];
}
