<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenants_personal_info extends Model
{
   
    protected $table='tenants_personal_infos';
    protected $fillable=['t_nid',
    'reg_stat',
    't_name',
    't_father_name',
    't_photo',
    't_religion',
    't_dob',
    't_marital',
    't_prmt_address',
    't_edu_stat',
    't_occu_detail'];
}
