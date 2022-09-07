<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenants_family_info extends Model
{
    protected $table='tenants_family_infos';
    protected $fillable=['t_famaly_number','t_nid','fname','fphn0','foccu0','fage0'];
}
