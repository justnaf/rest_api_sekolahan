<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::all();

        return $this->success($data,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nis' => 'required|unique:siswa,nis',
            'nama' => 'required|string',
            'gender' => 'required|in:laki-laki,perempuan',
            'tempat_lahir' => 'nullable|string',
            'tgl_lahir' => 'nullable|string',
            'email' => 'required|string|unique:siswa,email',
            'nama_ortu' => 'nullable|string',
            'alamat' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'kelas_id' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            $msg =$validator->errors();

            return $this->failedResponse($msg,422);
        }

        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->gender = $request->gender;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->email = $request->email;
        $siswa->nama_ortu = $request->nama_ortu;
        $siswa->alamat = $request->alamat;
        $siswa->phone_number = $request->phone_number;
        $siswa->kelas_id = $request->kelas_id;
        $tambahSiswa = $siswa->save();
        if ($tambahSiswa) {
            return $this->success($siswa,201);
        }else{
            return $this->failedResponse('User gagal ditambahkan!',500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return $this->success($siswa,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validator = Validator::make($request->all(), [
            'nis' => 'required|unique:siswa,nis,'.$siswa->id,
            'nama' => 'required|string',
            'gender' => 'required|in:laki-laki,perempuan',
            'tempat_lahir' => 'nullable|string',
            'tgl_lahir' => 'nullable|string',
            'email' => 'required|string|unique:siswa,email,'.$siswa->id,
            'nama_ortu' => 'nullable|string',
            'alamat' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'kelas_id' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            $msg =$validator->errors();

            return $this->failedResponse($msg,422);
        }

        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->gender = $request->gender;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->email = $request->email;
        $siswa->nama_ortu = $request->nama_ortu;
        $siswa->alamat = $request->alamat;
        $siswa->phone_number = $request->phone_number;
        $siswa->kelas_id = $request->kelas_id;
        $editSiswa = $siswa->save();
        if ($editSiswa) {
            return $this->success($siswa,201);
        }else{
            return $this->failedResponse('User gagal ditambahkan!',500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $deleteData = $siswa->delete();

        if ($deleteData) {
            return $this->success(null,200);
        }else{
            return $this->failedResponse('User gagal dihapus!',500);
        }
    }
    private function
    success($data,$statusCode,$message='success')
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
            'status_code' => $statusCode
        ],$statusCode);
    }
    private function
    failedResponse($message,$statusCode)
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => null,
            'status_code' => $statusCode
    ],$statusCode);
    }
}