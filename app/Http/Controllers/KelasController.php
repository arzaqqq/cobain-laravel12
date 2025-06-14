<?php
namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'nomor_kelas' => 'required|integer|unique:kelas,nomor_kelas',
        ]);

        Kelas::create($request->only(['nama_kelas', 'nomor_kelas']));

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'nomor_kelas' => 'required|integer|unique:kelas,nomor_kelas,' . $id,
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->update($request->only(['nama_kelas', 'nomor_kelas']));

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus.');
    }
}
