<?php
namespace App\Http\Controllers;
use App\Models\Mahasiswa; // Impor Model Mahasiswa
use App\Models\Prodi; // Impor Model Prodi untuk dropdown
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::with('prodi')->get(); // Variabel HARUS $mahasiswas (jamak)
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    public function create()
    {
        $prodis = Prodi::all();
        return view('mahasiswas.create', compact('prodis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswa,nim', // Perhatikan: unique:mahasiswa
            'kelas' => 'required|string|max:10',
            'prodi_id' => 'required|exists:prodi,id', // Perhatikan: exists:prodi
            'angkatan' => 'required|integer|min:1900|max:' . (date('Y') + 5),
        ]);
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        // Tidak digunakan di UI ini
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $prodis = Prodi::all();
        return view('mahasiswas.edit', compact('mahasiswa', 'prodis'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswa,nim,' . $mahasiswa->id, // unique:mahasiswa
            'kelas' => 'required|string|max:10',
            'prodi_id' => 'required|exists:prodi,id', // exists:prodi
            'angkatan' => 'required|integer|min:1900|max:' . (date('Y') + 5),
        ]);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil diperbarui.');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil dihapus.');
    }
}