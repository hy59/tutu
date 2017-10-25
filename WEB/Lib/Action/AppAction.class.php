<?php

Class AppAction extends Action {

  // 注册方法
public function register(){
   $phone = $_GET['phone_data'];
   $password = md5($_GET['password_data']);
   $student_id = $_GET['student_id_data'];
  //  先判断这个手机号是否已将注册过,单条查找
   $dd = M('user')->where("`phone`='$phone'")->find();
   if ($dd) {
     echo -1;
     exit;   //和return 差不多
   }
   $arr['phone'] = $phone;
   $arr['password'] = $password;
   $arr['student_id'] = $student_id;
   $re = M('user')->add($arr);
   echo $re;
}

    // 获取用户信息
    public function get_user_info(){
      $phone = $_GET['phone'];
      // 单挑查询
      $arr = M('user')->where("`phone`='$phone'")->find();
      // 把数据传给ap端
      echo json_encode($arr);
    }
    // 登陆
    public function Login(){
      $phone = $_GET['phone_data'];
      $password = md5($_GET['password_data']);

      // 查找用户，单条查询
      $arr = M('user')->where("`phone`='$phone'")->find();
      // 判断，如果这个人不存在直接返回-1
      if (!$arr) {
        echo -1;
        exit;
      }
      // 判断密码存在
      if ($arr['password'] == $password) {
        echo 1;
      }else {
        echo 0;
      }

    }

  /**
  * 设置中的意见反馈
  */
 public function feedback(){
   $_GET['time'] = time();
   echo M('feedback')->add($_GET);
 }

/**
*获得最新版本
*/
public function version(){
  $arr = M('version')->order('id desc')->find();
  echo json_encode($arr);
}

/**
*发布社区，添加话题方法
*/
public function add_topic(){
   $_GET['time'] = time();
   echo M('topic')->add($_GET);
}

/**
*获得话题，从数据库拿数据
*/
public function get_topic(){
  $arr = M('topic')->order('id desc')->select();
  foreach ($arr as $key => $value) {
    $phone = $value['phone'];
    $user = M('user')->where("`phone`='$phone'")->find();
    $arr[$key]['user'] = $user;
    $arr[$key]['time'] = date('Y-m-d H-i-s',$value['time']);
  }
  echo json_encode($arr);
}

/**
*图书检索，从数据库获取数据
*/
public function search_book(){
  $key = $_POST['key_data'];
  $arr = M('book_info')->where("'booktitle'='$key'")->select();
  echo json_encode($arr);
}



}
 ?>
