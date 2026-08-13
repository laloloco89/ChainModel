<?php
/**
 * Tests for ChainModel
 */

use PHPUnit\Framework\TestCase;
use Chainmodel\Chainmodel;

class ChainmodelTest extends TestCase {
    private Chainmodel $instance;

    protected function setUp(): void {
        $this->instance = new Chainmodel(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainmodel::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
