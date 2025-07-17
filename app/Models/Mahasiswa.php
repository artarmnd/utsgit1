<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa'; // WAJIB: Sesuai nama tabel di DB
    protected $fillable = ['nama', 'nim', 'kelas', 'prodi_id', 'angkatan'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id', 'id'); // prodi_id adalah FK di tabel mahasiswa
    }
}