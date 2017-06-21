<?php
namespace app\common\controller;
use think\Controller;
/**
 * 前台入口模块
 *
 */
class Home extends Controller
{
    public function _initialize()
    {
        parent::_initialize();
    }

    public function _empty($action) {
        $this->error("当前控制器" . $this->request->controller() . ",存在非法操作" . $action);
    }
}