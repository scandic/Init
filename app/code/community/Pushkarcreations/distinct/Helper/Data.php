<?php

class Pushkarcreations_distinct_Helper_Data extends Mage_Core_Helper_Abstract{
    public function getIsActive(){
    	return Mage::getStoreConfig('distinctsection/distinctgroup/theme');
    }
}