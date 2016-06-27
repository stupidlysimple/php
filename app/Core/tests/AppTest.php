<?php
/**
 * PHP Unit Testing
 */

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testProducerFirst()
    {
		$app = new Core\App;
		$app->link('database', Core\Database::connect());
		$app->link('cachemanager', Core\Cache::init());
		$app->link('success', true);
		Core\Sharer::share('app', $app);
		$test = Core\Sharer::get();
		if($test['app']->success == true){
			$this->assertTrue(true);
		}else{
			$this->assertTrue(false);
		}
		$this->assertTrue(true);
        return 'first';
    }

    /**
     * @depends testProducerFirst
     */
    public function testConsumer()
    {
        $this->assertEquals(
            ['first'],
            func_get_args()
        );
    }
}
?>