<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 *
 * @package    open20\design\layout
 * @category   CategoryName
 */

namespace open20\design\assets;

use yii\web\AssetBundle;

/**
 * Class BootstrapItaliaDesignAsset
 * @package open20\design\assets
 */

class CmsDashboardRedattoreDesignAsset extends AssetBundle
{
  public $sourcePath = '@vendor/open20/design/src/assets/resources/bootstrapitaliacustom';
  public $js = [
    'js/btn-modify-cms-page.js'
  ];
  public $css = [
    'scss/main-cms-dashboard-redattore.scss'
  ];

  public $depends = [
    'open20\design\assets\BootstrapItaliaDesignAsset',
  ];


  /**
   * @inheritdoc
   */
  public function init()
  {
    parent::init();
  }
}
