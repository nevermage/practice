<?php

use Classes\Products;

class ProductControllerCest
{
    public function _before(UnitTester $I)
    {

    }
    // tests
    public function tryToTestGetWrongProduct(UnitTester $I)
    {
        $product = new Products();
        $item = $product::getProduct(5);
        $I->assertEmpty($item);
    }

    public function tryToTestGetProduct(UnitTester $I)
    {
        $product = new Products();
        $item = $product::getProduct(2);
        $I->assertContains("Apple", $item);
    }
}
