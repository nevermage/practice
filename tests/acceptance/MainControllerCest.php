<?php

use Codeception\Util\HttpCode;

class MainControllerCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/page');
        $I->seeResponseCodeIs(HttpCode::NOT_FOUND);
    }

    public function tryToTestCatalogLoad(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->see('Apple');
        $I->see('45.00 uah');
        $I->see('Pear');
    }
}
