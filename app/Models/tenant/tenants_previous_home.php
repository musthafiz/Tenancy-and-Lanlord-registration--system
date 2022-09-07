<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenants_previous_home extends Model
{
    protected $table='tenants_previous_homes';
    protected $fillable=[
't_nid'
,'t_prelandlord_name'
,'t_prelandload_phone'
,'t_prelandload_flat'
,'t_prelandload_house'
,'t_prelandload_road'
,'t_prelandload_area'
,'t_prelandload_section_bfock'
,'t_prelandload_thana'
,'t_prelandload_postcode'
,'t_prelandload_reason_change_home'
    ];
}
