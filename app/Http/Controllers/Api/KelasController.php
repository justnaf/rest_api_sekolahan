<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kelas::all();

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
            'kode_kelas' => 'required|unique:kelas,kode_kelas',
            'nama_kelas' => 'required|string'
        ]);

        if ($validator->fails()) {
            $msg =$validator->errors();

            return $this->failedResponse($msg,422);
        }

        $kelas = new Kelas();
        $kelas->kode_kelas = $request->kode_kelas;
        $kelas->nama_kelas = $request->nama_kelas;
        $saveMapel = $kelas->save();
        if ($saveMapel) {
            return $this->success($kelas,201);
        }else{
            return $this->failedResponse('User gagal ditambahkan!',500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        return $this->success($kelas,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        $validator = Validator::make($request->all(), [
            'kode_kelas' => 'required|unique:kelas,kode_kelas,'.$kelas->id,
            'nama_kelas' => 'required|string'
        ]);

        if ($validator->fails()) {
            $msg =$validator->errors();

            return $this->failedResponse($msg,422);
        }

        $kelas->kode_kelas = $request->kode_kelas;
        $kelas->nama_kelas = $request->nama_kelas;
        $editKelas = $kelas->save();
        if ($editKelas) {
            return $this->success($kelas,201);
        }else{
            return $this->failedResponse('User gagal ditambahkan!',500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        $deleteData = $kelas->delete();

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
