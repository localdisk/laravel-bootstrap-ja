<?php

class ExampleTest extends TestCase {

	/**
	 * 基本的な機能テストのサンプル
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}