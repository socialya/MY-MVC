<?php
/**
 * Created by PhpStorm.
 * User: 奥亚
 * Date: 2018/8/30
 * Time: 9:25
 */
Class Myadmin{
    function login(){
//        $a=$GLOBALS['nb']->query("show tables");
//       echo $GLOBALS['nb']->insert("fuck",array('id'=>null,'u_name'=>'阿萨斯的','u_pwd'=>"阿萨斯的"));
//        $GLOBALS['nb']->update("score",array('score'=>'8'),"score=2 and id=1");
//        $GLOBALS['nb']->delete("score","score=8 and id=1");


//        var_dump($aa);exit;
        include "view/login.php";
    }
    function gologin(){
        $user=$_POST['pma_username'];
        $password=$_POST['pma_password'];
        $aa=$GLOBALS['nb']->query("select User,password_lifetime from mysql.user where User='".$user."'")->fetchall();
        if(empty($aa)){
            die("此用户不存在");
        }
        $is_ps=$GLOBALS['nb']->query("select '".$aa['password_lifetime']."'=password('".$password."') as res")->fetchone();
        if($is_ps['res']=='1'){
            echo "登陆成功";
        }
        else{
         echo    "密码错误";
        }
    }
    function yeah(){
        $aa=$GLOBALS['nb']->query("show databases;")->fetchall();
        foreach ($aa as $v){
            $bb[$v['Database']]=$GLOBALS['nb']->ck($v['Database'])->query("show tables")->fetchall();
        }
        include "view/admin.php";
    }
  function getTable(){
        $database=$_GET['database'];
        $GLOBALS['nb']->query("use $database");
        $res=$GLOBALS['nb']->query("show tables")->fetchall();
        $js=json_encode($res);
        $js=str_replace($database, "name",$js);
        $hh=json_decode($js,true);
       include "view/table_list.php";
  }

  function getFieldIndex(){
$database=$_GET['database'];
$table=$_GET['table'];
include "view/getFieldIndex.php";
die;
  }
  function getFieldIndexlist(){
      $database=$_GET['database'];
      $table=$_GET['table'];
      $res=$GLOBALS['nb']->query("desc $database.$table")->fetchall();
      include "view/getFieldIndexlist.php";
  }
//  function getFieldIndexlist(){
//
//  }
function joinDb(){
    $database=$_GET['database'];
    $GLOBALS['nb']->query("use $database");
    $res=$GLOBALS['nb']->query("show tables")->fetchall();
    $js=json_encode($res);
    $js=str_replace($database,"name",$js);
    $hh=json_decode($js,true);
    include "view/join_db.php";
}
function joinTable(){
    $database=$_GET['database'];
    $table=$_GET['table'];
    $GLOBALS['nb']->query("use $database");
    $bb=$GLOBALS['nb']->query("select * from $table")->fetchall();
    $res=$GLOBALS['nb']->query("desc $database.$table")->fetchall();
    include "view/join_table.php";
}
function getsyIndexlist(){
    $database=$_GET['database'];
    $table=$_GET['table'];
    include "view/getsyindexlist.php";
}
function newXj(){
    $database=$_GET['database'];
    $table=$_GET['table'];
    include "view/new_xj.php";
}
function goXj(){
//    CREATE TABLE `book`. ( `id` INT(10)
//    NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`))
//    ENGINE = MyISAM;
    $table=$_POST['name'];
    $database=$_POST['db'];
    $yx=$_POST['tbl_storage_engine'];
    $name=$_POST['field_name'];
    $type=$_POST['field_type'];
    $lenth=$_POST['field_length'];

    $a="CREATE TABLE '".$table."'('".$name."','".$type($lenth)."','".$yx."')";
    echo $a;
    die;
}
function jquery(){
    include "view/nb.php";
}
}