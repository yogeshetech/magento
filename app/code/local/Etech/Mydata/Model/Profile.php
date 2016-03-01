<?php

class Etech_Mydata_Model_Profile extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('mydata/profile');
    }

    public function lastData($post) {
        return $this->setData($post)->save();
    }

    public function deleteData($id) {
        return $this->user_id($id)->delete($id);
    }

    public function profileData($id, $post) {

        return $this->setId($id)->addData($post)->save();
    }

}
