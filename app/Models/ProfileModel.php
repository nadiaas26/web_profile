<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    protected $table = "profile";
    protected $fillable = ['nama','ttl','alamat','Alamat','Agama','Kewarganegaraan','no_hp', 'email', 'deskripsi','image', 'background'];
}
