<?php

/**
 * sfPropelBootstrapThemePlugin configuration.
 *
 * @package    sfPropelBootstrapThemePlugin
 * @subpackage config
 * @author     Gede Hendra Saputra <fabien.potencier@symfony-project.com>
 * @version    v4.0
 */
class sfPropelBootstrapThemePluginConfiguration extends sfPluginConfiguration
{
  /**
   * @see sfPluginConfiguration
   */
  public function initialize()
  {
    if (!sfConfig::get('sf_twbs_web_dir'))
    {
      sfConfig::set('sf_twbs_web_dir', '/sfPropelBootstrapThemePlugin');
    }
  }
}
