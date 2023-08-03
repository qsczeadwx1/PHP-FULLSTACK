<?php

namespace App\Lib;

use Exception;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class JWT{
    protected  $alg = 'SHA256';
    protected $secret_key = 'php506';
    public function createJWT(Array $data){
    // jwt생성 메소드
    Log::debug('---------create JWT START---------');

        //header 작성
        $header_json = json_encode([
            'alg' => $this->alg
            ,'typ' => 'JMT'
            ,
        ]);
        $header=base64_encode($header_json);


        Log::debug('headr : '.$header_json);

        $iat = time();
        $exp = $iat+60;

        //payload 작성
        $payload_json = json_encode([
            'id'=>$data['id'],
            'iat' => $iat,
            'exp' => $exp
        ]);
        $payload=base64_encode($payload_json);
        Log::debug('payload :'.$payload);

        // signature 작성

        $signature = hash($this->alg, $header.$payload.$this->secret_key);
        Log::debug('payload :'.$signature);

        Log::debug('---------create JWT END---------');
        return $header.".".$payload.".".$signature;

    }
    public function chkToken($token) {
        try {
            // aaa.bbb.ccc 토큰을 분리
            $arr_token = explode(".", $token);
            $header = $arr_token[0];
            $payload = $arr_token[1];
            $signature = $arr_token[2];

            // 토큰 유효기간 확인
            $arr_payload= json_decode(base64_decode($payload));
            if(time()>$arr_payload['exp']) {
                throw new Exception('exp 초과');
            }

            Log::debug('signature'.$signature);

            $verify = hash($this->alg, $header . $payload . $this->secret_key);

            Log::debug('verify'.$verify);

            if ($signature !== $verify) {
                throw new Exception('not equle signature');
            }
        } catch (Throwable $th) {
            Log::debug('Error'.$th->getMessage());
            return false;
        }finally{
            Log::debug("--------chk end----------");
        }
    }
}
