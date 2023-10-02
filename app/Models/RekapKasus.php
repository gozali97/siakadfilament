<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapKasus extends Model
{
    use HasFactory;
    protected $table = 'kasus';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['siswa_id', 'kategori_kasus_id', 'nama_kasus'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function kategoriKasus()
    {
        return $this->belongsTo(KategoriKasus::class);
    }
}
