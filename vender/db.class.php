<?php
/**
 * Created by PhpStorm.
 * User: 奥亚
 * Date: 2018/8/30
 * Time: 11:49
 */
Class Db{
    private  static  $link;
    private static $a;
    private static $bb;
    public function __construct($config){
        self::$link=mysqli_connect($config["dns"], $config["username"],$config["password"],$config["dbname"]);
        mysqli_query(self::$link,'set names utf8');
    }
    public function query($sql){
        self::$a=mysqli_query(self::$link,$sql);
        return $this;
    }
    public function ck($sql){
        self::$bb=mysqli_select_db(self::$link,$sql);
        return $this;
    }
    public function fetchall(){
        return mysqli_fetch_all(self::$a,MYSQLI_ASSOC);
    }
    public function fetchone(){
        return mysqli_fetch_array(self::$a,MYSQLI_ASSOC);
    }
    public function insert($dbname,$array=array()){
        $v="(";
        foreach ($array as $k=>$value){
            if(is_string($value))  {
                $value="'".$value."'";
            }
            if (empty($value)){
                $value='null';
            }
            $v.=$value.",";
        }
        $v=rtrim($v,",");
        $v.=")";
            $sql="insert into ".$dbname." values ".$v;
          $this->query($sql);

            return mysqli_insert_id(self::$link);
    }
    public function update($dbname,$array=array(),$const=''){
        $v='';
        foreach ($array as $k=>$value){
            if (is_string($value)){
                $value="'".$value."'";
            }
            $v.=$k."=".$value.",";
        }
        $v=rtrim($v,",");
        $sql="update ".$dbname." set ".$v." where ".$const;
        $this->query($sql);
    }
    public function delete($dbname,$cos){
      $sql="delete from ".$dbname." where ".$cos;
      $this->query($sql);
    }
}