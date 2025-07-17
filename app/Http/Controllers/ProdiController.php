<?php
namespace App\Http\Controllers;
use App\Models\Prodi; // Impor Model Prodi
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodis = Prodi::all(); // Variabel HARUS $prodis (jamak)
        return view('prodis.index', compact('prodis'));
    }

    public function create()
    {
        return view('prodis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
        ]);
        Prodi::create($request->all());
        return redirect()->route('prodis.index')->with('success', 'Prodi berhasil ditambahkan.');
    }

    public function show(Prodi $prodi)
    {
        // Tidak digunakan di UI ini
    }

    public function edit(Prodi $prodi)
    {
        return view('prodis.edit', compact('prodi'));
    }

    public function update(Request $request, Prodi $prodi)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
        ]);
        $prodi->update($request->all());
        return redirect()->route('prodis.index')->with('success', 'Prodi berhasil diperbarui.');
    }

    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        return redirect()->route('prodis.index')->with('success', 'Prodi berhasil dihapus.');
    }
}