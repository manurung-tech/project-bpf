<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pesanan()
    {
        // data dummy pesanan
        $pesanan = [
            [
                'meja' => 1,
                'menu' => 'Nasi Goreng',
                'jumlah' => 2,
                'status' => 'Menunggu'
            ],
            [
                'meja' => 3,
                'menu' => 'Es Teh Manis',
                'jumlah' => 1,
                'status' => 'Dibuat'
            ],
            [
                'meja' => 2,
                'menu' => 'Mie Ayam',
                'jumlah' => 1,
                'status' => 'Selesai'
            ],
        ];

        return view('admin.pesanan', compact('pesanan'));
    }
}
