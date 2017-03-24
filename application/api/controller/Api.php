<?php
namespace app\api\controller;
class Api
{
    //校验验证码
    public function validatecode()
    {
        $json=[
          'error'=>false,
          'status'=>'success',
          'msg'=>'发送超时',
        ];
        return json($json, 200);
    }

    //发送验证码
    public function getcode()
    {
      $json=[
        'error'=>true,
        'status'=>'success',
      ];
      return json($json, 200);
    }
}
