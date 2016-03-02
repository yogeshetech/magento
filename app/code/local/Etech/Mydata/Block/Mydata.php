<?php

class Etech_Mydata_Block_Mydata extends Mage_Core_Block_Template {

    public function _prepareLayout() {
        return parent::_prepareLayout();
    }

    public function getMydata() {
        if (!$this->hasData('mydata')) {
            $this->setData('mydata', Mage::registry('mydata'));
        }
        return $this->getData('mydata');
    }

    public function loadAllData() {
        $model = Mage::getModel('mydata/mydata')->loadAllData();
        return $model;
    }

    public function loadUpdateData() {

        $edit_id = $this->getRequest()->getParam('edit_id');

        $updata_Data = Mage::getModel('mydata/mydata')->updateByCondition($edit_id);

        return $updata_Data;
    }

}
