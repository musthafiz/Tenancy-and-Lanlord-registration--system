<?php

namespace App\Models\landlord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class landlord_family_infos extends Model
{
    protected $table='landlord_family_infos';
    protected $fillable=['l_personal_family_member','l_nid', 'fname0','fphn0', 'foccu0','fage0'
    ];
}
