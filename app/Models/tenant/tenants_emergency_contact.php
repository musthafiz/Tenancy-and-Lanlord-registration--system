<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenants_emergency_contact extends Model
{
    protected $table='tenants_emergency_contacts';
    protected $fillable=['t_nid','t_emergency_name','t_emergency_nid','t_emergency_phone','t_emergency_addess','t_emergency_relation'];
    
}
