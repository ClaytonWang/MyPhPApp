<?php
namespace app\home\controller;

use think\Controller;

class Index extends Controller
{
    public function index($name = "thinkPHP")
    {
        $this->assign('name', $name);
        return $this->fetch();
    }
    public function Hello()
    {
        return $this->fetch();
    }
}
