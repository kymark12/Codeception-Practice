<?php 



class LogInScenariosCest
{
    public function _before(AcceptanceTester $I)
    {
        //Verify initial page objects
        $I->amOnPage('/');
        $I->see('Activity');
        $I->see('Username');
        $I->see('Password');
        $I->see('Log In');
    }

    // Positive Scenario
    public function ValidUser(AcceptanceTester $I)
    {
        $I->amGoingTo('Login a valid user');
        $I->expect('User should be able to login successfully');
        //Login Successfully
        $I->fillField('log', 'demo');
        $I->fillField('pwd', 'demo');
        $I->click('wp-submit');
        //Verify successful login
        $I->see("What's new, demo");
        $I->see('Log Out');
    }
    //Negative Scenario
    public function InvalidUser(AcceptanceTester $I)
    {
        $I->wantTo('Login an invalid user');
        //Login Successfully
        $I->fillField('log', 'test');
        $I->fillField('pwd', 'test');
        $I->click('wp-submit');
        //Verify unsuccessful login
        $I->see('ERROR', '.login');
        $I->seeLink('Lost your password?');
    }
}
