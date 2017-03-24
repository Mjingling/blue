<?php
namespace app\index\controller;
class Index
{
    private $resource="http://localhost/blue/public/static/";
    private $request="http://localhost/blue/public/index.php/";
    public function index()
    {
        $viewData=[
          '__RESOURCE__'=>$this->resource,
          '__REQUEST__'=>$this->request,
        ];
        return view("index",$viewData);
    }

    //预约
    public function book()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("book",$viewData);
    }
    //拍摄须知
    public function help_tips()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("help_tips",$viewData);
    }
    //我的订单
    public function orders()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("orders",$viewData);
    }
    //个人资料
    public function profile()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("profile",$viewData);
    }
    //门店地址
    public function store_address()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("store_address",$viewData);
    }
    //产品列表
    public function products()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("products",$viewData);
    }
    //产品详情
    public function product_detaile()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("product_detaile",$viewData);
    }
    //企业产品详情
    public function product_detaile_qiye()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("product_detaile_qiye",$viewData);
    }
    //订单详情
    public function order_details()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("order_details",$viewData);
    }
    //下单
    public function do_order()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("do_order",$viewData);
    }
    //套餐列表
    public function combos()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("combos",$viewData);
    }
    //选择时间
    public function schedules()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("schedules",$viewData);
    }
    //选择城市
    public function city()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("city",$viewData);
    }
    //选择门店
    public function stores()
    {
      $viewData=[
        '__RESOURCE__'=>$this->resource,
        '__REQUEST__'=>$this->request,
      ];
      return view("stores",$viewData);
    }
}
