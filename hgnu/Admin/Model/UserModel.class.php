<?php
    namespace Admin\Model;
    use Think\Model\RelationModel;

    /**
     * Class UserModel
     * @package Home\Model
     * 用户表，用户信息表，角色表关联模型
     */
    class UserModel extends RelationModel {
        protected $_link = array(

            'userinfo' => array(
                'mapping_type'    => self::HAS_ONE,
                'foreign_key'     => 'uid',
                'as_fields'       => 'username'
            ),
        );

        /**
         * @param $id
         * @return mixed
         * 根据id获取userinfo表中的信息
         */
        public function getInfo($id) {
            $where = array('id' => $id);
            return $this->where($where)->relation(true)->find();
        }

        /**
         * @param $name
         * @return mixed
         * 根据user_login(用户名)查找用户信息
         */
        public function getInformation($name) {
            $where = array('user_login' => $name);
            return $this->where($where)->relation(true)->find();
        }
    }