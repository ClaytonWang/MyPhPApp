<?php
namespace app\home\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index($name = "thinkPHP")
    {
        $result= DB::connect()->table('tbl_User')->select();
        $this->assign('name', $name);

        dump($result);
        $this->assign('result', $result);
        return $this->fetch();
    }
    public function phpinfo()
    {
        echo phpinfo();
    }
}
