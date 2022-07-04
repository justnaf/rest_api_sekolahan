<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PresensiController extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Presensi::all();

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
            'nis'=> 'required',
            'kelas_id'=> 'required',
            'guru_id'=> 'required',
            'id_jadwal'=> 'required',
            'status'=> 'required',
        ]);

        if ($validator->fails()) {
            $msg =$validator->errors();

            return $this->failedResponse($msg,422);
        }

        $presensi = new Presensi();
        $presensi->id_jadwal = $request->id_jadwal;
        $presensi->nis = $request->nis;
        $presensi->kelas_id = $request->kelas_id;
        $presensi->guru_id = $request->guru_id;
        $presensi->status = $request->status;
        $editpresensi = $presensi->save();
        if ($editpresensi) {
            return $this->success($presensi,201);
        }else{
            return $this->failedResponse('User gagal ditambahkan!',500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function show(Presensi $presensi)
    {
        return $this->success($presensi,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presensi $presensi)
    {
        $validator = Validator::make($request->all(), [
            'nis'=> 'required',
            'kelas_id'=> 'required',
            'guru_id'=> 'required',
            'id_jadwal'=> 'required',
            'status'=> 'required',
        ]);

        if ($validator->fails()) {
            $msg =$validator->errors();

            return $this->failedResponse($msg,422);
        }

        $presensi = new Presensi();
        $presensi->id_jadwal = $request->id_jadwal;
        $presensi->nis = $request->nis;
        $presensi->kelas_id = $request->kelas_id;
        $presensi->guru_id = $request->guru_id;
        $presensi->status = $request->status;
        $editpresensi = $presensi->save();
        if ($editpresensi) {
            return $this->success($presensi,201);
        }else{
            return $this->failedResponse('User gagal ditambahkan!',500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presensi $presensi)
    {
        $deleteData = $presensi->delete();

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
