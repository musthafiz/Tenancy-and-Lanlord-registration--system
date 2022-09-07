<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenants_contact_info extends Model
{
    protected $table='tenants_contact_infos';
    protected $fillable=['t_nid','t_passport','t_curr_home_code','t_email','t_phone'
    ];
}
