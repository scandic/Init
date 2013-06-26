<?php

class Pushkarcreations_Init_Helper_Data extends Mage_Core_Helper_Abstract{
    public function getIsActive($setting){
    	return Mage::getStoreConfig($setting);
    }

    public function getTwitterUsername(){
    	return Mage::getStoreConfig('initsection/initsocial/twitter_timeline');
    }
}