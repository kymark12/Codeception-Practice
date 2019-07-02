<?php 

class UserActivityScenariosCest
{
    //Pre-conditions
    public function _before(AcceptanceTester $I)
    {
        //Verify initial page objects
        $I->amOnPage('/');
        $I->see('Activity');
        $I->see('Username');
        $I->see('Password');
        $I->see('Log In');
        //Login Successfully
        $I->fillField('log', 'demo');
        $I->fillField('pwd', 'demo');
        $I->click('wp-submit');
    }

    //Update status with media upload and set post to Private
    public function UpdateStatus(AcceptanceTester $I)
    {
        //Verify test objects
        $I->amOnPage('/');
        $I->seeElement('.bp-suggestions');
        $I->click('.bp-suggestions');
        $I->seeElement('.privacy');
        $I->seeElement('//button[@title="Attach Media"]');
        //Set post configurations
        $I->selectOption('privacy', 'Private');
        $I->attachFile('//input[@type="file"]', '3221291.png');
        $I->click('//input[@type="submit"]');
    }
}
