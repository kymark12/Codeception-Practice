<?php
$incrementName = 1;
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
        //Add variables for the album name and description for validations and success messages
        $I->fillField('//input[@id="rtmedia_album_name"]', 'Generic Album Name');
        $I->fillField('//textarea[@id="rtmedia_album_description"]', 'This is a test and generic description of this album.');
        $I->click('//button[@id="rtmedia_create_new_album"]');
        $I->waitForElement('.rtmedia-success.rtmedia-create-album-alert', 30);
        $I->see('Generic Album Name album created successfully', '.rtmedia-success.rtmedia-create-album-alert');
        $I->click('.mfp-close');
        //Add photos on the new album
        $I->click('.primary');
        $I->wait(2);
        //$imageNumber = array('1', '2', '3', '4', '5');
        //foreach ($imageNumber as $value) {
            $I->attachFile('//input[@type="button"]', 'testimage1.jpg');
            $I->wait(300);
        //}
    }
}
