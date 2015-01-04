<?php

/**
* Test for class Aoe_Backup_Helper_Data
*
* @category    Aoe
* @package     Aoe_Backup
*/
class Aoe_Backup_Test_Helper_Data extends EcomDev_PHPUnit_Test_Case
  {
    /**
    * Tests is extension active
    *
    * @test
    * @loadFixture
    */
    public function testIsExtensionActive()
    {
      $this->assertTrue(
      Mage::helper('aoe_backup')->isExtensionActive(),
      'Extension is not active please check config'
    );
  }
}