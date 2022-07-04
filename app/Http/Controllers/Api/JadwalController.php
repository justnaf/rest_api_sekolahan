<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jadwal::all();

        return $this->success($data,200);
         $jadwals = Jadwal::join('kelas','kelas_id','=','jadwal.kelas_id')
                        ->join('mapel','mapel.id','=','jadwal.mapel_id')
                        ->join('guru','guru.id','=','jadwal.guru_id')
                        ->select([
                            'jadwal.id',
                            'jadwal.hari',
                            'guru.nama',
                            'mapel.nama_mapel',
                            'kelas.nama_kelas'
                            ])->get();

        return $this->success($jadwals,200); 
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
            'kelas_id' => 'required|exists:kelas,id',
            'mapel_id' => 'required|exists:mapel,id',
            'guru_id' => 'required|exists:guru,id',
            'hari' => 'required|in:senin,selasa,rabu,kamis,jumat,sabtu',
            'jam_pelajaran' => 'required|string'
        ]);

        if ($validator->fails()) {
            $msg =$validator->errors();

            return $this->failedResponse($msg,422);
        }

        $jadwal = new Jadwal();
        $jadwal->kelas_id = $request->kelas_id;
        $jadwal->mapel_id = $request->mapel_id;
        $jadwal->guru_id = $request->guru_id;
        $jadwal->hari = $request->hari;
        $jadwal->jam_pelajaran = $request->jam_pelajaran;
        $tambahJadwal = $jadwal->save();
        if ($tambahJadwal) {
            return $this->success($jadwal,201);
        }else{
            return $this->failedResponse('User gagal ditambahkan!',500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        return $this->success($jadwal,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $validator = Validator::make($request->all(), [
            'kelas_id' => 'required',
            'mapel_id' => 'required',
            'guru_id' => 'required',
            'hari' => 'required|in:senin,selasa,rabu,kamis,jumat,sabtu',
            'jam_pelajaran' => 'required|string'
        ]);

        if ($validator->fails()) {
            $msg =$validator->errors();

            return $this->failedResponse($msg,422);
        }

        $jadwal->kelas_id = $request->kelas_id;
        $jadwal->mapel_id = $request->mapel_id;
        $jadwal->guru_id = $request->guru_id;
        $jadwal->hari = $request->hari;
        $jadwal->jam_pelajaran = $request->jam_pelajaran;
        $editJadwal = $jadwal->save();
        if ($editJadwal) {
            return $this->success($jadwal,201);
        }else{
            return $this->failedResponse('User gagal ditambahkan!',500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        $deleteData = $jadwal->delete();

        if ($deleteData) {
            return $this->success(null,200);
        }else{
            return $this->failedResponse('User gagal dihapus!',500);
        }
    }

    private function success($data,$statusCode,$message='success')
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
            'status_code' => $statusCode
        ],$statusCode);
    }
    private function failedResponse($message,$statusCode)
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => null,
            'status_code' => $statusCode
    ],$statusCode);
    }
}
