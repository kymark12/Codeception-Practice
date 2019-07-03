<?php 

class UserActivityScenariosCest
{
    //Pre-conditions
    public function _before(AcceptanceTester $I)
    {
        //Verify initial page objects
        $I->amOnPage('/activity');
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
    /*public function UpdateStatus(AcceptanceTester $I)
    {
        //Verify test objects
        $I->amOnPage('/activity');
        $I->seeElement('.bp-suggestions');
        $I->click('.bp-suggestions');
        $I->seeElement('.privacy');
        $I->seeElement('//button[@title="Attach Media"]');
        //Set post configurations
        $I->wantTo('Post a media file in Private privacy setting');
        $I->selectOption('privacy', 'Private');
        $I->attachFile('//input[@type="file"]', 'crimson.jpg');
        $I->click('//input[@type="submit"]');
        $I->wait(10);
        
    }*/

    //Create an album with any valid name and add 5 media files
    public function CreateAlbum(AcceptanceTester $I)
    {
        //Go to the Album page
        $I->amOnPage('/members/demo/media/album/');
        //Verify if the page is correct
        $I->see('demo');
        $I->see('Media');
        $I->see('Albums', '//a[@id="rtmedia-nav-item-albums"]');
        $I->click('.clicker.rtmedia-action-buttons');
        $I->click('.rtmedia-reveal-modal.rtmedia-modal-link');
        //Verify Create an Album modal
        $I->see('Create an Album');
        $I->see('Album Title');
        $I->see('Album Description');
        $I->fillField('//input[@type=""]');
        $I->click('.primary');
        $I->attachFile('//input[@type="button"]', 'crimson.jpg');
        $I->attachFile('//input[@type="button"]', 'testimage2.jpg');
        $I->attachFile('//input[@type="button"]', 'testimage3.jpg');
        $I->attachFile('//input[@type="button"]', 'testimage4.jpg');
        $I->attachFile('//input[@type="button"]', 'testimage5.jpg');
        $I->click('.start-media-upload');
    }
}
