<?php
/**
 * Tests for CrewWeights
 */

use PHPUnit\Framework\TestCase;
use Crewweights\Crewweights;

class CrewweightsTest extends TestCase {
    private Crewweights $instance;

    protected function setUp(): void {
        $this->instance = new Crewweights(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Crewweights::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
