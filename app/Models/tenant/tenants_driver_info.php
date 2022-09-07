<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenants_driver_info extends Model
{
    protected $table='tenants_driver_infos';
    protected $fillable=['t_nid','t_driver_name','t_driver_nid','t_driver_phone','t_driver_address'];
}
