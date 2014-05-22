<?php
class IndexAction extends Action {
    /*
     * 显示登陆页面
     * */
    public function index(){
        //echo date("Y-m-d H:i:s");
        $this->display();
    }

    /*
     * 登陆
     * */
    public function login(){
        //var_dump($_POST);

        $username = $_POST['username'];
        $password = SHA1($_POST['password']);

        //dump($password);

        if($_SESSION['verify'] != md5($_POST['verify'])) {
            $this->error('验证码错误！');
        }

        $m = M('Users');
        $where['user_name'] = $username;
        $where['user_pass'] = $password;
        $num = $m->where($where)->count();

        if($num>0){
            $user=$m->where($where)->find();
            //dump($user['user_id']);
            $_SESSION['userId']=$user['user_id'];//当前用户信息
            $_SESSION['cart']=array();//购物车

            //var_dump($_SESSION['userId']);
            //var_dump($_SESSION['cart']);
            $this->redirect('Position/index');
        }else{
            $this->error('该用户不存在！');
        }
    }

    /*
     * 显示注册信息页面
     * */
    public function register(){
        $this->display();
    }

    /*
     * 注册
     * */
    public function create(){
        //var_dump($_POST);
        $username = $_POST['username'];
        $telphone = $_POST['telphone'];
        $pass1=$_POST['pass1'];
        $pass2=$_POST['pass2'];
      if(($pass1!=null) && ($pass1 == $pass2) && ($username!=null) && ($telphone!=null)){
        $m = M('Users');
        $where['user_name'] = $_POST['username'];
        $flag = $m->where($where)->find();
        //dump($flag['user_name']);

        if($flag['user_name'] != null){
            $this->error('该用户名已存在！');
        }else{
            $data['user_name']=$_POST['username'];
            $data['user_tel']=$_POST['telphone'];
            $data['user_pass']=SHA1($_POST['pass1']);
            $data['register_time']=date("Y-m-d H:i:s");
            $idNum=$m->add($data);
            if($idNum>0){
                $this->success('数据添加成功','index');
            }else{
                $this->error('数据添加失败IndexAction');
            }
        }
      }else{
          $this->redirect('Index/register');
      }
    }

}