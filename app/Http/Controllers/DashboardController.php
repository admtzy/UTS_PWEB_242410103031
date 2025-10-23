<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = $request->session()->get('username');

        if (!$user) {
            return redirect()->route('login')->with('error', 'User belum login.');
        }

        $tanaman = [
            ['nama' => 'Padi', 'kategori' => 'Pangan Pokok', 'frekuensi' => 3, 'pendapatan' => 85],
            ['nama' => 'Jagung Manis', 'kategori' => 'Pangan Pokok', 'frekuensi' => 2, 'pendapatan' => 70],
            ['nama' => 'Kedelai', 'kategori' => 'Protein Nabati', 'frekuensi' => 1, 'pendapatan' => 50],
            ['nama' => 'Cabai Rawit', 'kategori' => 'Sayuran', 'frekuensi' => 4, 'pendapatan' => 65],
            ['nama' => 'Tomat Merah', 'kategori' => 'Buah Sayur', 'frekuensi' => 3, 'pendapatan' => 60],
        ];

        return view('dashboard', [
            'username' => ($user),
            'tanaman' => $tanaman,
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $user = $request->session()->get('username');

        if (!$user) {
            return redirect()->route('login')->with('error', 'User belum login.');
        }

        $panen = [
            ['nama' => 'Padi', 'tanggal' => '2025-10-01', 'berat' => '250 kg', 'lokasi' => 'Jember'],
            ['nama' => 'Jagung Manis', 'tanggal' => '2025-10-05', 'berat' => '120 kg', 'lokasi' => 'Lumajang'],
        ];

        $ringkasan = [
            'padi' => '250 kg',
            'jagung' => '120 kg',
            'total_pendapatan' => 'Rp 3.450.000',
            'stok' => 30
        ];

        return view('pengelolaan', [
            'username' => ($user),
            'panen' => $panen,
            'ringkasan' => $ringkasan,
        ]);
    }
}
