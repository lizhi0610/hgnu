<?php
    namespace Admin\Controller;
    use Think\Controller;

    /**
     * Class IndexController
     * @package Admin\Controller
     * 后台首页控制器
     */
    class IndexController extends CommonController {

        /**
         * 后台首页视图
         */
        public function index(){
//            $userinfo = D('user')->getInfo($_SESSION[C('SESSION_PREFIX')]['uid']);
//            p($userinfo);
            $this->display();
        }
    }