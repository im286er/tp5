<?php
namespace app\home\controller;
use think\Controller;
use think\Request;
/*
* 空模块
* 前台模块指定错误时调用
*/
class Error extends Controller
{
    public function _initialize()
    {
    }

    public function index(Request $request)
    {
        $this->error("非法请求,控制器" . $request->controller() . '不存在！！！');
    }
}