<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenants_maid_info extends Model
{
    protected $table='tenants_maid_infos';
    protected $fillable=['t_nid','t_maid_name','t_maid_nid','t_maid_phone','t_maid_addres'];
}
