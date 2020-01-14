<?php

namespace Tests;

use PHPUnit\TestCase;

/**
 * Class DummyTest
 */
final class DummyTest extends TestCase
{
	/**
	 * @test
	 */
	public function dummy(): void
	{
		$this->assertTrue(true);
	}
}
