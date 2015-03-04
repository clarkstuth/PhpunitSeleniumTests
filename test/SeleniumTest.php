<?php

class SeleniumTest extends PHPUnit_Extensions_Selenium2TestCase {

	public function setUp() {
		$this->setBrowser('firefox');
		$this->setBrowserUrl('http://selenium-test.localhost/index.html');
	}

	public function testTitleIsCorrect() {
		$this->assertEquals('Test Page', $this->title());
	}

}