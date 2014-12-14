<?php
App::uses('UserLike', 'Model');

/**
 * UserLike Test Case
 *
 */
class UserLikeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_like',
		'app.user',
		'app.article',
		'app.category',
		'app.comment',
		'app.like'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserLike = ClassRegistry::init('UserLike');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserLike);

		parent::tearDown();
	}

}
