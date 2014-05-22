<?php
class BookAction extends Action{
    public function index(){
        $menuId = $_GET['menuId'];
        $m = M('Menus');
        $menu = $m->find($menuId);
        //var_dump($menu);
        $this->assign('book',$menu);
        $this->display();
    }
    public function add(){
        //var_dump($_POST);
        $menuId=$_POST['menuId'];
        $m=M('Menus');
        $where['menu_id']=$menuId;
        $menu=$m->where($where)->find();
        $shopId=$menu['shop_id'];

        $num=$_POST['num'];
        if($num>=0){
            if(isset($_SESSION['cart'][$menuId])){
                $_SESSION['cart'][$menuId]['num']+=$num;
            }else{
                $_SESSION['cart'][$menuId]['num']=$num;
            }
            //var_dump($_SESSION);
            $this->redirect('Menu/index',array('id'=>$shopId));
        }else{
            $this->error('份数只能为非负整数！');
        }
    }

}