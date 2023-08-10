<?php

namespace App\Http\Controllers;

use App\Lib\JWT;
use Illuminate\Http\Request;
use Throwable;

use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $obj_jwt;

    public function __construct(){
        $this->obj_jwt = new JWT();
    }

    function IssueToken(Request $req){
        Log::debug('id',$req->only('id'));
        //유효성 체크

        //유저 검색

        //jwt 생성
        $token=$this->obj_jwt->createJWT($req->only('id'));
        Log::debug('token'.$token);

        $res = [
            'errflg' => '0',
            'token' => $token
        ];

        return response(json_encode($res),200);
    }

    /*
        토큰 검증용
    */

    public function chk(Request $req){
        $token = $req->header('Authorization');
        $res = [
            'errflg' => '0',
            'msg' => 'good.'
        ];
        $status = 200;

        $result = $this->obj_jwt->chkToken($token);
        if( is_array($result) ){
            $res = [
                'errflg' => '1',
                'error_info' => [
                    "code" => $result["code"] 
                    ,"msg" => $result["msg"]
                ]
            ];
            $status = 401;
        }
        return response(json_encode($res),$status);
    }
}
