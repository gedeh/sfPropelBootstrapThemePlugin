<?php

/**
 * Model generator configuration.
 *
 * @package    sfPropelBootstrapThemePlugin
 * @subpackage generator
 * @author     Luciano Coggiola <tanoinc@gmail.com>
 */
abstract class sfModelBootstrapGeneratorConfiguration extends sfModelGeneratorConfiguration
{

  protected function compile()
  {
    parent::compile();
    $this->configuration = array_merge( $this->configuration, array(
      'template' => array(
          'span' => $this->getTemplatesSpan(),
        )
      )
    );
  }

  public function getForm($object = null, $options = array())
  {
    $form = parent::getForm($object, $options);
    $form->getWidgetSchema()->getFormFormatter()->setErrorListFormatInARow("  <ul class=\"list-unstyled\">\n%errors%  </ul>\n");
    return $form;
  }
}
