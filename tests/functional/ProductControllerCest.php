<?php

class ProductControllerCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTestGoToProductPage(AcceptanceTester $I)
    {
        $I->amOnPage('/product/2');
        $I->click('Apple');
        $I->dontSee('Pear');
    }

//    public function tryToTestProductWrongPage(AcceptanceTester $I)
//    {
//        $I->amOnPage('/product/76');
//        $I->see("Page not found");
//    }
}
