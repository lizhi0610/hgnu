<?php
    namespace Admin\Controller;
    use Think\Controller;
    use Admin\Model;

    /**
     * Class LoginController
     * @package Hgnu\Controller
     * 后台登录控制器
     */
    class LoginController extends Controller{

        /**
         * 后台登陆首页视图
         */
        public function index() {
            $this->display();
        }

        /**
         * 后台登陆控制器
         */
        public function login() {
            $arr = array(
                'user_login'  => I('user_login'),
                'user_pass'   => encrypt(I('user_pass'),C('ENCRYPTION_KEY')),
                'remember-me' => I('remember-me')
            );

            //处理下次自动登录
            if($arr['remember-me'] == 1) {
                $account = $arr['user_login'];
                $ip = get_client_ip(0,true);
                $value = $account . '|' . $ip;
                $value = encrypt($value,C('ENCRYPTION_KEY'));
                @setcookie('remember-me',$value,time()+7*24*3600,"/");
            }

            $user = M('user')->where(array('user_login' => $arr['user_login']))->find();
            $userinfo = D('user')->getInfo($user['id']);
            if($user['user_status'] == 0) $this->error('账号被禁用,请联系管理员...');
            if($user['user_type'] != '管理员') $this->error('无权限登录...');
            if(!$user||$user['user_pass']!=$arr['user_pass']) $this->error('账号密码错误,请重试...');

            $data = array(
                'id'                => $user['id'],
                'last_login_ip'     => get_client_ip(0,true),
                'last_login_time'   => date("Y-m-d H:i:s")
            );
            $result = M('user')->save($data);
            if(!$result) $this->error('登录失败,请重试...');

            session('uid',$user['id']);
            session('username',$userinfo['username']);
            session('last_login_time', $data['last_login_time']);
            session('last_login_ip', $data['last_login_ip']);

            $this->success('登陆成功',U('Index/index'));
        }
    }

























