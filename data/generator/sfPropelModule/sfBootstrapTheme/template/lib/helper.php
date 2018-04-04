[?php

/**
 * <?php echo $this->getModuleName() ?> module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage <?php echo $this->getModuleName()."\n" ?>
 * @author     ##AUTHOR_NAME##
 */
abstract class Base<?php echo ucfirst($this->getModuleName()) ?>GeneratorHelper extends sfModelBootstrapGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? '<?php echo $this->params['route_prefix'] ?>' : '<?php echo $this->params['route_prefix'] ?>_'.$action;
  }
  
  public function linkToMoveUp($object, $params)
  {
    $params['icon'] = $this->defaultIcon($params, 'icon-chevron-up');
    $params['only_icon'] = (isset($params['only_icon']) and $params['only_icon'] === true);
    $params['size'] = $this->defaultSize($params, 'btn-small');
    $title = __($params['label'], array(), 'sf_admin');
    $label = (!$params['only_icon'] ? ' '. $title : '' );

    if ($object->isFirst())
    {
      return '<div class=" btn '.$params['size'].' disabled"><i class="'.$params['icon'].'"></i>'.$label.'</div>';
    }

    if (empty($params['action']))
    {
      $params['action'] = 'moveUp';
    }

    return link_to('<i class="'.$params['icon'].'"></i>'.$label, '<?php echo $this->params['moduleName'] ?>/'.$params['action'].'?<?php echo $this->getPrimaryKeyUrlParams('$object', true); ?>, array('title'=> $title, 'class'=>'btn '.$params['size']));
  }

  public function linkToMoveDown($object, $params)
  {
    $params['icon'] = $this->defaultIcon($params, 'icon-chevron-down');
    $params['only_icon'] = (isset($params['only_icon']) and $params['only_icon'] === true);
    $params['size'] = $this->defaultSize($params, 'btn-small');
    $title = __($params['label'], array(), 'sf_admin');
    $label = (!$params['only_icon'] ? ' '. $title : '' );

    if ($object->isLast())
    {
      return '<div class=" btn '.$params['size'].' disabled"><i class="'.$params['icon'].'"></i>'.$label.'</div>';
    }

    if (empty($params['action']))
    {
      $params['action'] = 'moveDown';
    }

    return link_to('<i class="'.$params['icon'].'"></i>'.$label, '<?php echo $this->params['moduleName'] ?>/'.$params['action'].'?<?php echo $this->getPrimaryKeyUrlParams('$object', true); ?>, array('title'=> $title, 'class'=>'btn '.$params['size']));
  }

}
