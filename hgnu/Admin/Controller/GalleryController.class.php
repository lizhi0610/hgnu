<?php
    namespace Admin\Controller;
    use Admin\Controller;


    class GalleryController extends CommonController{

        /**
         * 相册首页视图
         */
        public function index() {
            $this->display();
        }

        /**
         * 上传图片视图
         */
        public function upload() {
            $this->display();
        }

        /**
         * 上传操作
         */
        public function doUpload() {
//            $path = './Public/Uploads/Gallery/';
//            $minPath = './Public/Uploads/Gallery/Min/';
//            $upload = new \Think\Upload();
//            $upload->maxSize = 3145728;
//            $upload->exts = array('jpg','jpeg','png','gif');
//            $upload->rootPath = $path;
//
//            $info = $upload->upload();
//            if(!$info) {
//                $this->error($upload->getError());
//            }else {
//                foreach($info as $file) {
//                    echo $file['savepath'].$file['savename'];
//                }
//            }
//            p($file);
//            $image = new \Think\Image();
//            $image->open($path . $file['savepath'].$file['savename']);
//            $image->thumb(470, 289,\Think\Image::IMAGE_THUMB_CENTER)->save($minPath . 'min_' . $file['savename']);
        }
    }































