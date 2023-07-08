<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationModel extends Model
{
    protected $table = "education";
    protected $fillable = ['id','sekolah','pendidikan','tahun','deskripsi'];
}
