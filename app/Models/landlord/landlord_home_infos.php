<?php

namespace App\Models\landlord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class landlord_home_infos extends Model
{
    protected $table='landlord_home_infos';
    protected $fillable=['l_nid','l_home_info_flat','l_home_info_house','l_home_info_road','l_home_info_area','l_home_info_section_bfock','l_home_info_thana','l_home_info_post_code','l_home_info_bill_photo'
    ];
}
