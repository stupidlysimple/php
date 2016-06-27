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