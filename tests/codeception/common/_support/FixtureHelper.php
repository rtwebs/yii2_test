<?php

namespace tests\codeception\common\_support;

use Codeception\Module;
use Codeception\TestCase;
use tests\codeception\frontend\unit\fixtures\ProfileFixture;
use tests\codeception\frontend\unit\fixtures\TokenFixture;
use tests\codeception\frontend\unit\fixtures\UserFixture;
use yii\test\FixtureTrait;

/**
 * This helper is used to populate the database with needed fixtures before any tests are run.
 * In this example, the database is populated with the demo login user, which is used in acceptance
 * and functional tests.  All fixtures will be loaded before the suite is started and unloaded after it
 * completes.
 */
class FixtureHelper extends Module
{
    use FixtureTrait;

    /**
     * @var array
     */
    public static $excludeActions = ['loadFixtures', 'unloadFixtures', 'getFixtures', 'globalFixtures', 'fixtures'];

    /**
     * @param TestCase $testcase
     */
    public function _before(TestCase $testcase)
    {
        $this->unloadFixtures();
        $this->loadFixtures();
        parent::_before($testcase);
    }

    /**
     * @param TestCase $testcase
     */
    public function _after(TestCase $testcase)
    {
        $this->unloadFixtures();
        parent::_after($testcase);
    }

    /**
     * @inheritdoc
     */
    public function fixtures()
    {
        return [
            'user' => [
                'class'    => UserFixture::className(),
                'dataFile' => '@tests/codeception/frontend/unit/fixtures/data/init_user.php',
            ],
            'token' => [
                'class'    => TokenFixture::className(),
                'dataFile' => '@tests/codeception/frontend/unit/fixtures/data/init_token.php',
            ],
            'profile' => [
                'class'    => ProfileFixture::className(),
                'dataFile' => '@tests/codeception/frontend/unit/fixtures/data/init_profile.php',
            ],
        ];
    }
}
