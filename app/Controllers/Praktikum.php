<?php

namespace App\Controllers;

use App\Models\MahasiswaModel; // gunakan use agar rapi

class Praktikum extends BaseController
{
    public function profil(): string
    {
        $model = new MahasiswaModel();

        if (!$model->find('32602300061')) {
    // Coba masukkan data
    if (!$model->insert([
        'nim' => '32602300061',
        'nama' => 'Naufal Labiib Quthb Himawan',
        'prodi' => 'Teknik Informatika'
    ])) {
        dd($model->errors()); // tampilkan jika gagal
    } else {
        echo "Data berhasil ditambahkan!<br>";
    }
}

        // Ambil semua data dari tabel
        $data['mahasiswa'] = $model->findAll();

        // Kirim data ke view
        return view('profil_mahasiswa', $data);
    }
}