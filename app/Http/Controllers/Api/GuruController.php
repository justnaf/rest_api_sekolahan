<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::all();

        return $this->success($guru, 200);
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
            'user_id' => 'required|exists:users,id',
            'nip' => 'required|unique:guru,nip',
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required|string',
            'gender' => 'required|in:laki-laki,perempuan',
            'phone_number' => 'nullable|string',
            'email' => 'required|string|unique:guru,email',
            'alamat' => 'nullable|string',
            'pendidikan' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            $msg =$validator->errors();

            return $this->failedResponse($msg,422);
        }
        // return $request->all();
        $guru = new Guru();
        $guru->user_id = $request->user_id;
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tgl_lahir = $request->tgl_lahir;
        $guru->gender = $request->gender;
        $guru->phone_number = $request->phone_number;
        $guru->email = $request->email;
        $guru->alamat = $request->alamat;
        $guru->pendidikan = $request->pendidikan;
        $tambahGuru = $guru->save();
        if ($tambahGuru) {
            return $this->success($guru,201);
        }else{
            return $this->failedResponse('User gagal ditambahkan!',500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        return $this->success($guru,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'nip' => 'required|unique:guru,nip,'.$guru->id,
            'nama' => 'required|string',
            'gender' => 'required|in:laki-laki,perempuan',
            'phone_number' => 'nullable|string',
            'email' => 'required|email|unique:guru,email,'.$guru->id,
            'alamat' => 'nullable|string',
            'pendidikan' => 'nullable|string'
        ]);

        if($validator->fails()){
            $msg = $validator->errors();

            return $this->failedResponse($msg, 422);
        }

        $guru->user_id = $request->user_id;
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tgl_lahir = $request->tgl_lahir;
        $guru->gender = $request->gender;
        $guru->phone_number = $request->phone_number;
        $guru->email = $request->email;
        $guru->alamat = $request->alamat;
        $guru->pendidikan = $request->pendidikan;
        $saveGuru = $guru->save();
        if($saveGuru){
            return $this->success($guru,201);
        } else {
            return $this->failedResponse('User gagal diupdate!', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $deleteData = $guru->delete();

        if($deleteData){
            return $this->success(null, 200);
        } else {
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