<?php
/**
 * Tests for ZKEdge
 */

use PHPUnit\Framework\TestCase;
use Zkedge\Zkedge;

class ZkedgeTest extends TestCase {
    private Zkedge $instance;

    protected function setUp(): void {
        $this->instance = new Zkedge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zkedge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
