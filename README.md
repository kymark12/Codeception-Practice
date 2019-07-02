/* This repository is for my Codeception automated test cases for a hiring assignment */

NOTE: I did this on a windows machine while learning the framework as well, I had fun :)

Setup Requirements:
1. A PC with Windows/Mac/Linux
2. Install XAMPP https://www.hostinger.ph/tutorials/how-to-install-composer
3. Install Composer https://www.hostinger.ph/tutorials/how-to-install-composer
4. In the installation sequence for composer, indicate the php.exe on the XAMPP directory
5. Install Codeception, do not do this or the steps below if you already have codeception or know how to setup codeception

Setting up Codeception:
1. Install Codeception dependencies
2. Go to https://codeception.com
3. Run this line on CMD/Command Prompt: composer require "codeception/codeception" --dev
4. No need to download codecept.phar, it's already included in the repo files
5. Add the PHP to the PATH environment variable in Windows, follow the steps below if unfamiliar with this setup:
    - Press Win+Pause keys
    - Click Advance System Settings on the left side bar
    - Click Environment Variables on the lower left hand side
    - Look for Path variable on the first list box
    - Double left click Path
    - Click New button on the right side of the Edit Varaible window
    - Add the php directory on the blank field created (Example: C:\xampp\php)
    - Click OK buttons until all windows are closed
    - Close and reopen any CMD or Command line interface open to make sure the changes are applied
6. Download/Clone the repo, save the content anywhere on the local machine
7. Add the repo directory on the Environment Variable as well
8. To view the test scripts go to ./QAAssignment/tests/acceptance
9. Run the chromedriver on a terminal/CMD window by inputting "chromedriver --url-base=/wd/hub" and press Enter
9. Run the scripts by opening a terminal/CMD window and typing "php codecept.phar run acceptance", add "--steps" in the end if you want to view the steps
