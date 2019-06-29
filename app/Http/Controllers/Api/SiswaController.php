<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use App\Siswa;
use Dotenv\Regex\Success;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        if (count($siswa) <= 0) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Siswa tidak ditemukan'
            ];
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'Berhasil.'
        ];
        return response()->json($response, 200);
    }

    public function store(Request $request)
    {
        // 1. tampung semua inputan ke $input
        $input = $request->all();

        // 2. buat validasi ditampung ke $validator
        $validator = Validator::make($input, [
            'nama' => 'required|min:10'
        ]);

        // 3. chek validasi
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'validation error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        // 4. buat fungsi untuk menhandle semua inputan -> dimasukan ke table
        $siswa = Siswa::create($input);

        // 5. menampilkan response
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'siswa berhasil ditambahkan.'
        ];

        // 6. tampilkan hasil
        return response()->json($response, 200);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        if (!$siswa) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Siswa tidak ditemukan'
            ];
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'Berhasil.'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $input = $request->all();

        if (!$siswa) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Siswa tidak ditemukan'
            ];
            return response()->json($response, 404);
        }

        $validator = Validator::make($input, [
            'nama' => 'required|min:10'
        ]);

        // 3. chek validasi
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'validation error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }
        $siswa->nama = $input['nama'];
        $siswa->save();

        // 5. menampilkan response
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'siswa berhasil diupdate.'
        ];

        // 6. tampilkan hasil
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        if (!$siswa) {
            $response = [
                'success' => false,
                'data' => 'Gagal Hapus',
                'message' => 'Siswa tidak ditemukan'
            ];
            return response()->json($response, 404);
        }

        $siswa->delete();
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'siswa berhasil dihapus.'
        ];

        // 6. tampilkan hasil
        return response()->json($response, 200);
    }
}
