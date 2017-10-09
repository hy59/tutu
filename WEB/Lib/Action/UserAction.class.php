<?php
Class UserAction extends Action{
      public function add(){
//     $arr['phone']='13029032390';
//     $arr['name']='aries';
//     $arr['password']='123';
//     $arr['sex']=1;
//
//
//     $re = M('user')->add($arr);
//     echo $re;

  // }
 // public function delete(){
 //   $re= M('user')->where("`id`='2'")->delete();
 //  //  返回值1为成功为失败
 //   echo $re;
 // }
 //  public function update(){
 //     $arr['name']='tom';
 //     $arr['phone']='1234454657';

  //    $re = M('user')->where("`id`='1'")->save($arr);
  //    echo $re;
  // }

  //  public function select(){
  // 单挑查询,一维数组
  // 不带条件，默认从头开始拿第一条
  //  $arr = M('user')->find();
    //  $arr = M('user')->where("`id`='6'")->find();
    //  dump可以把数据格式化，并且可以展现全部，看数据用dump
    //  dump($arr);
// gecho 普通输出，不能格式化数据，也不能展开,输入某个数据
      // echo $arr;

      // 多条查询 二位数组
      // desc倒序  asc正序
      // $arr = M('user')->where("`name`='aries'")->order('id desc')->select();

      // Limit 分页0-100 101-200 201-300
      // limiy(一个参数)拿多少条数据
      // limiy(从多少条开始，从头拿多少条)
      // $arr = M('user')->limit(2)->select();
      // $arr = M('user')->limit(2,3)->select();
      //  dump($arr);

      //  查询到了数据如何给APP使用
      // echo json_encode($arr);


      // http://127.0.0.1/www/23qi/index.php/User/select
      // 我们app的接口，用到查询的数据，所以app和数据库能连接到一起。
//    }
//
// }
//增加
// public function add(){
  //增加数据   我们需要一个包，数组,原理，将前端传来的数据保存在变量，
  //里，再将变量都存储在一个数组里，再将数组传输到数据库里的表里
  //var arr = array('' => , );
  //包名叫data,数据库里的user表里有phone这个键，以下意为网表的phone字段存入
  //13003829382的数据
  // $data['phone'] = '13003829382';
  // //密码通过md5加密
  // $data['password'] = md5('123456');
  // $data['nickname'] = '联通'；

  //操作数据库方法  M（‘表名’）之后add是操作，即将data传入user表里
  //data里的字段会在user表里找到相应的字段，$re为返回值
//   $re = M('user')->add($data);
//   //返回值就是我们的ID或者本条数据在本表中的第几个位置
//   echo $re;
// }
//
// //删减数据,方法后要加括号
// public function mod(){
  //同样需要一个包
  // $data['phone'] = '13902843908';
  // $data['nickname'] = 'gigi';
  // $data['Collect'] = 'baby';
  // //操作数据库.变量前加$，不然识别不了，别忘记返回值，
  // $id = 3;
  // //最后是save保存
  // $re = M('user')->where("`id`='$id'")->save($data);
  // //弹出返回值,变量不用括号，成功返回值为1，失败为0
//   echo $re；
// }

  //删减,，同样的写法
  // public function delete(){
  //  //同样需要一个包
  //  $phone = '12003894738';
  //  //操作数据库,删除也得要条件
  //  $re = M('user')->where("`phone`='$phone'")->delete();
  //  echo $re;
  // }
  // //增、删、减方法略微不同，注意
  //
  // //查询，单条查询，多条查询等，重点掌握
  // public function select(){
    //单条查询带条件,写明条件find方法找到即可，不带条件会默认有数据的第一条
    // $arr = M('user')->where("`id` = '4'")->find();
    // $arr = M('user')->find();
    // dump($arr);

    //格式化输入 dump();即看起来明了，一条一条的列好 等同于echo,但略有不同，这个只能在thinkphp仲使用，原生的用var_dump();
    // dump($arr);
    //多条查询不带条件,通常不用，用在我们想看一下有多少注册用户
      // $arr = M('user')->select();
      // echo count($arr);会判断一共有多少数据
    //   dump($arr);
    // //多条查询带条件,单条find,多条select
    // $arr = M('user')->where("`nickname`='中国联通'")->select();
    // dump($arr);

    //排序,如新浪微博，最后发的在最前方，数组反转
    // 默认正序 asc
    // 倒叙 desc
    //第一个参数，要以什么进行排序，通常以id
    //第二个参数如何排序
    // $arr = M('user')->order("id desc")->select();
    // dump($arr);
    //分页，下拉加载就是分页从数据库拿
    //1-10  11-20 21-30 等等，如设定每页10条
    //分页后，每页内容条数一定，每页条数自己设定
    //limit(参数1)；一共拿多少条 从头
    //limit(参数1，参数2)； 从参数1条开始拿多少条数据
    //  $arr = M('user')->limit(2,3)->order("id desc")->where("`nickname`='niji'")->select();
    //  dump($arr);

    //json格式输出




public function summ{

   $total = 80;
   $sum = $total > 100 ? '成功':'失败';
   echo $sum;
 }
}

 ?>
