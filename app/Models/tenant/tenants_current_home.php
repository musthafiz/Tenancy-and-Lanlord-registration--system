<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenants_current_home extends Model
{
    protected $table='tenants_current_homes';
    protected $fillable=['t_nid','t_curr_home_landlord_name','t_curr_home_phone','t_curr_home__flat','t_curr_home_house','t_curr_home__road','t_curr_home_area','t_curr_home_section_bfock','t_curr_home_thana','t_currhome_postcode','t_currhome_shift_date'
    ];
}
