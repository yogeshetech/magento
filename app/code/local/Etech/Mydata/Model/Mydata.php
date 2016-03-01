<?php

class Etech_Mydata_Model_Mydata extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('mydata/mydata');
    }

    public function loadByField() {
        $data = $this->getResource()->loadByField();
        return $data;
    }

    public function loadUpdate() {



        //   $edit_id = $this->getResource()->loadByField();
        // print_r($edit_id);
        // $model->addFieldToFilter('profile_id',3);
        // $id = $this->getRequest()->getParam('edit_id');
        // echo $id;
        //return $edit_id// $data = $this->getResource()->loadByUpdate();
    }

    public function deleteByCondition($id) {
        return $this->getResource()->deleteByCondition($id);
    }

    public function updateByCondition($edit_id) {
       
        $data = $this->getResource()->selectByCondition($edit_id);
      
          
        return $data;
    }

}
