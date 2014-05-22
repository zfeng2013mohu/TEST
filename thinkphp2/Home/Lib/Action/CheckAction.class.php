<?php
class CheckAction extends Action{
    /*
     * 显示订单信息
     * */
    public function index(){
        //var_dump($_SESSION);
        session();
        $arr=array();
        $total=0;
        foreach($_SESSION['cart'] as $menuId => $value){
               if($_SESSION['cart'][$menuId]['num']>0){
                   //echo $menuId.'=>'.$_SESSION['cart'][$menuId]['num'].'<br/>';
                   $m=M('Menus');
                   $where['menu_id']=$menuId;
                   $menu=$m->where($where)->find();

                   $menu['num']=$_SESSION['cart'][$menuId]['num'];
                   $total +=$menu['menu_price']*$menu['num'];

                   $arr[]=$menu;
               }
        }
        //var_dump($arr);
        //dump($total);
        $this->assign('total',$total);
        $this->assign('book',$arr);
        $this->display();
    }

    /*
     * 订单信息入库
     * */
    public function checkin(){
        foreach($_POST as $menuId => $num){
            if(is_numeric($menuId)){
                $_SESSION['cart'][$menuId]['num']=$num;
            }
        }
        $data['user_id']=$_SESSION['userId'];
        $data['order_name'] = $_POST['bookName'];
        $data['order_tel'] = $_POST['telphone'];
        $data['order_address'] = $_POST['address'];
        $data['order_time'] = $_POST['time'];
        $data['order_style'] = 0;
        $data['order_crt_date'] = date('Y-m-d h:i:s');
        $o=M('Orders');
        $orderId=$o->add($data);
        $oc = M('Order_content');

        $totalMoney=0;

        if($orderId){
            $cdata['order_id'] = $orderId;
            foreach($_SESSION['cart'] as $menuId => $num){
                    $cdata['menu_id'] = $menuId;

                    $m=M('Menus');
                    $tempMenu=$m->find($menuId);
                    $cdata['m_name']=$tempMenu['menu_name'];
                    $cdata['price']=$tempMenu['menu_price'];

                    $cdata['quantity'] = $_SESSION['cart'][$menuId]['num'];
                    $totalMoney +=$cdata['price']*$cdata['quantity'];
                    $ocId = $oc->add($cdata);
                    if($ocId){

                    }else{
                        $this->error('订单提交失败，请重新提交！');
                    }
            }
        }else{
            $this->error('订单提交失败，请重新提交！');
        }
        $_SESSION['cart']=array();
        $bookInfo=$o->find($orderId);
        $this->assign('bookInfo',$bookInfo);
        $where['order_id']=$orderId;
        $ocInfo=$oc->where($where)->select();
        $this->assign('ocInfo',$ocInfo);
        $this->assign('totalMoney',$totalMoney);

        $this->display();
    }
}