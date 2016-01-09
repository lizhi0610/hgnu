<?php
    namespace Admin\Controller;
    use Think\Controller;


    class CommonController extends Controller {

        /**
         * 判断用户是否已经登录，未登录则跳转登陆页面
         */
        public function _initialize() {

            //处理已经选择自动登录
            if(isset($_COOKIE['remember-me']) && !isset($_SESSION[C('SESSION_PREFIX')]['uid'])) {
                $value = explode('|', decrypt($_COOKIE['remember-me'], C('ENCRYPTION_KEY')));
                $ip = get_client_ip();

                //本次登录地点IP地址与cookie中的ip地址一致时，自动登录
                if($ip = $value[1]) {
                    $user_login = $value[0];
                    $user = D('user')->getInformation($user_login);

                    //用户type不为0，即未被锁定时候保持登录状态
                    if($user['user_status'] != 0) {
                        session('uid',$user['id']);
                        session('username',$user['username']);
                        session('last_login_time', date("Y-m-d H:i:s"));
                        session('last_login_ip', $user['last_login_ip']);
                    }
                }
            }

            //判断用户是否已经登录
            if(!isset($_SESSION[C('SESSION_PREFIX')]['uid'])) {
                redirect(U('Login/index'));
            }
        }

        /**
         * 退出登录，清除session
         */
        public function logout() {
            //清空所有session
            session_unset();
            session_destroy();

            //清除所有cookies
            cookie('remember-me',null);

            $this->redirect('Login/index');
        }

        /**
         * 相册图像上传处理
         */
        public function uploadPic() {
            p($_POST);die;
            if(!IS_POST) E('上传失败,请重试...');
            $upload = $this->_upload('Gallery',470,289);
            echo json_encode($upload);
        }
        /**
         * @param $path 设置路径
         * @param $width 缩略图剪裁宽度
         * @param $height 缩略图剪裁高度
         * 图片上传处理
         */
        public function _upload($path, $width, $height) {
            $path = './Public/Uploads/' . $path . '/';
            $minPath = './Public/Uploads/' . $path . '/Min/';
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg','jpeg','png','gif');
            $upload->rootPath = $path;

            $info = $upload->upload();
            if(!$info) {
                $this->error($upload->getError());
            }else {
                foreach($info as $file) {
                    echo $file['savepath'].$file['savename'];
                }
            }
            p($file);
//            echo '<br/>' . $path . $file['savepath'].$file['savename'];
            $image = new \Think\Image();
            $image->open($path . $file['savepath'].$file['savename']);
            $image->thumb($width, $height,\Think\Image::IMAGE_THUMB_CENTER)->save($minPath . 'min_' . $file['savename']);
        }
    }