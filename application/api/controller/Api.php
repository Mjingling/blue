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
    //获取时间表
    public function getTimes()
    {
      $time_list=[
        //时间  是否可以预定
        ["time"=>"10:00","canOrderCount"=>0],
        ["time"=>"10:30","canOrderCount"=>1],
        ["time"=>"11:00","canOrderCount"=>1],
        ["time"=>"11:30","canOrderCount"=>1],
        ["time"=>"12:00","canOrderCount"=>1],
        ["time"=>"12:30","canOrderCount"=>1],
        ["time"=>"13:00","canOrderCount"=>1],
        ["time"=>"13:30","canOrderCount"=>1],
        ["time"=>"14:00","canOrderCount"=>1],
        ["time"=>"14:30","canOrderCount"=>1],
        ["time"=>"15:00","canOrderCount"=>1],
        ["time"=>"15:30","canOrderCount"=>1],
      ];

      $json=[
        'data'=>$time_list,
        'error'=>false,
        'status'=>'success',
      ];
      return json($json, 200);
    }

    //下单
    public function order()
    {
      $json=[
        'error'=>false,
        'url'=>'./orders',
        'status'=>'success',
        'msg'=>'下单成功',
      ];
      return json($json, 200);
    }
}
