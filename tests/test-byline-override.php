<?php

class Test_Byline_Override extends WP_UnitTestCase {
	public static $post_id;

	public static function wpSetupBeforeClass() {
		self::$post_id = self::factory()->post->create();
	}

	function test_custom_byline_is_saved() {
	}
}