<?php
    namespace Home\Controller;
    use Think\Controller;

    /**
     * Class IndexController
     * @package Home\Controller
     * 前台首页控制器
     */
    class IndexController extends Controller {

        /**
         * 首页视图
         */
        public function index(){
            $this->display();
        }
    }