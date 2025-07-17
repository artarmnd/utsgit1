<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodi'; // WAJIB: Sesuai nama tabel di DB
    protected $fillable = ['nama', 'fakultas'];

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'prodi_id', 'id'); // prodi_id adalah FK di tabel mahasiswa
    }
}