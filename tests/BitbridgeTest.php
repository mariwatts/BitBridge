<?php
/**
 * Tests for BitBridge
 */

use PHPUnit\Framework\TestCase;
use Bitbridge\Bitbridge;

class BitbridgeTest extends TestCase {
    private Bitbridge $instance;

    protected function setUp(): void {
        $this->instance = new Bitbridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bitbridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
