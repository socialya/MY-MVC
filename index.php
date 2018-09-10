<?php
/**
 * Created by PhpStorm.
 * User: 奥亚
 * Date: 2018/8/30
 * Time: 9:41
 */
if(empty($_SERVER['PATH_INFO'])){
  include "view/hy.php";
}
else {
    $a = ltrim($_SERVER['PATH_INFO'], '/');
    $b = explode('/', $a);
    $b[0]=ucfirst($b[0]);
    include  "common/db.config.php";
    include "vender/db.class.php";
 $GLOBALS['nb']=new Db($config['db']);
 $p=$_SERVER['SCRIPT_NAME'];
 $ps=ltrim($p,'/');
 $ps=explode(".",$ps);
 $host=$_SERVER['REMOTE_ADDR'];
define("__PABLIC__","http://".$host.'/yaya'."/public/");
    include 'controller/' . $b[0] . '.class.php';
    @call_user_func_array($b, array(''));
}
