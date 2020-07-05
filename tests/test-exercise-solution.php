<?php

class Test_Exercise_Solution extends WP_UnitTestCase {
	function setUp() {
		parent::setUp();

		// Enable pretty permalinks.
		$this->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' );
		// See https://core.trac.wordpress.org/ticket/35452
		create_initial_taxonomies();
	}

	function test_category_page_body_class() {
		$this->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' );

	    $category_id = self::factory()->category->create( array( 'name' => 'foo' ) );
	    self::factory()->post->create( array( 'category' => $category_id ) );

	    $this->go_to( home_url( '/category/foo/' ) );

	    $this->assertContains( "category-$category_id", get_body_class() );
    }
}