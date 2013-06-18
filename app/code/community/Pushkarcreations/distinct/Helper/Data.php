<?php

class Pushkarcreations_distinct_Helper_Data extends Mage_Core_Helper_Abstract{
    public function getIsActive($setting){
    	return Mage::getStoreConfig($setting);
    }

    public function getTwitterUsername(){
    	return Mage::getStoreConfig('distinctsection/distinctsocial/twitter_timeline');
    }
}