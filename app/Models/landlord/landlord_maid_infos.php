<?php

namespace App\Models\landlord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class landlord_maid_infos extends Model
{
    protected $table='landlord_maid_infos';
    protected $fillable=['l_nid','l_maid_name','l_maid_nid','l_maid_phone','l_maid_prmt_addss'
    ];
}
