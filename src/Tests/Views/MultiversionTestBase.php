<?php

/**
 * @file
 * Contains \Drupal\multiversion\Tests\Views\MultiversionTestBase.
 */

namespace Drupal\multiversion\Tests\Views;

use Drupal\views\Tests\ViewTestBase;
use Drupal\views\Tests\ViewTestData;

/**
 * Base class for all multiversion views tests.
 */
abstract class MultiversionTestBase extends ViewTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('multiversion_test_views');

  protected function setUp($import_test_views = TRUE) {
    parent::setUp($import_test_views);

    if ($import_test_views) {
      ViewTestData::createTestViews(get_class($this), array('multiversion_test_views'));
    }
  }

}
