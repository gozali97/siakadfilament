<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunPelajaran extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tahun_pelajaran';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tahun_pelajaran', 'status'];
}
