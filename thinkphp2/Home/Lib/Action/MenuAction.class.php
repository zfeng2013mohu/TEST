<?php
class MenuAction extends Action
{
    /*
     * 获取店面菜单
     * */
    public function index()
    {
        $f = M('Menus');
        $where['shop_id'] = $_GET['id'];
        $arr = $f->where($where)->select();
        $this->assign('menu', $arr);
        //var_dump($arr);

        $s = M('Shops');
        $where2['shop_id'] = $_GET['id'];
        $shop = $s->where($where2)->find();
        $this->assign('shop', $shop);
        //var_dump($shop);
        $this->display();
    }

    /*
     * 菜单搜索功能
     * */
    public function search()
    {
        //var_dump($_POST);
        if (isset($_POST['menuName']) && ($_POST['menuName'] != null)) {
            $where['menu_name'] = array('like', "%{$_POST['menuName']}%");
        }
        if (isset($_POST['menuPrice']) && ($_POST['menuPrice'] != null)) {
            $where['menu_price'] = array('eq', $_POST['menuPrice']);
        }
        $m = M('Menus');
        $where['shop_id'] = $_GET['id'];
        $menu = $m->where($where)->select();
        $this->assign('menu', $menu);

        $s = M('Shops');
        $where2['shop_id'] = $_GET['id'];
        $shop = $s->where($where2)->find();
        $this->assign('shop', $shop);

        $this->display('index');
    }
}