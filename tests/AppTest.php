<?php
/**
 * StupidlySimple - A PHP Framework For Lazy Developers.
 *
 * @author        Fariz Luqman <fariz.fnb@gmail.com>
 * @copyright    2017 Fariz Luqman
 * @license        MIT
 *
 * @link        https://stupidlysimple.github.io/
 */

/**
 * PHP Unit Testing.
 */
use PHPUnit\Framework\TestCase;
use Simplyfier\Cache;
use Simplyfier\Database;
use Simplyfier\DI\Container;
use Simplyfier\DI\Sharer;
use Simplyfier\Service;
use Simplyfier\TimeTrackr;

/**
 * Class AppTest.
 */
class AppTest extends TestCase
{
    /**
     * @return string
     */
    public function testDependencies()
    {
        try {
            echo "\n";
            echo 'Creating a new container...';
            $app = new Container();
            self::displayOK();

            echo 'Load TimeTrackr config...';
            TimeTrackr::applyConfig();
            self::displayOK();

            echo 'Connecting to the database...';
            Database::loadConfig();
            $app->put('database', Database::getInstance());
            self::displayOK();

            echo 'Instantiate cachemanager... ';
            Cache::loadConfig();
            $app->put('cachemanager', Cache::getInstance());
            self::displayOK();

            echo 'Instantiate service manager and load all services...';
            $app->put('service', Service::loadServices());
            self::displayOK();

            echo 'Sharing the app...';
            Sharer::share('app', $app);
            self::displayOK();
        } catch (\Exception $exception) {
            self::displayFailed();
            static::assertTrue(false);

            return 'first';
        }
        static::assertTrue(true);

        return 'first';
    }

    public function displayOK()
    {
        echo "     OK \n";
    }

    public function displayFailed()
    {
        echo "     FAILED \n";
    }
}
