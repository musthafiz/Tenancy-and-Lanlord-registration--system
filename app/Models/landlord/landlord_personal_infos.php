<?php

namespace App\Models\landlord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class landlord_personal_infos extends Model
{
    protected $table='landlord_personal_infos';
    protected $fillable=['l_nid','reg_stat','l_personal_name','l_personal_father_name','l_personal_photo','l_personal_religion','l_personal_dob','l_personal_marital','l_personal_permanent_addss','l_personal_edu_status','l_personal_occupation_detail','l_personal_occu_addss'
    ];
}
