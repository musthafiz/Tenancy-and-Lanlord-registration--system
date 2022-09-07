<?php

namespace App\Models\landlord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class landlord_contact_infos extends Model
{
    protected $table='landlord_contact_infos';
    protected $fillable=['l_nid','l_passport','l_email','l_phone'
    ];
}
