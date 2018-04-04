[?php if ($field->isPartial()): ?]
  [?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
  [?php include_component('<?php echo $this->getModuleName() ?>', $name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
  <div class="control-group[?php if ($form->getValidatorSchema()->offsetExists($name)) echo ($form->getValidator($name)->getOption('required') && !$form[$name]->hasError()) ? ' info' : null ?][?php $form[$name]->hasError() and print ' error' ?]">

      [?php echo $form[$name]->renderLabel($label, array('class'=>'control-label')) ?]

      <div class="controls">
        [?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?]
      [?php if ($form[$name]->hasError()): ?]
        <span class="help-inline">[?php echo $form[$name]->renderError() ?]</span>
      [?php endif; ?]

      [?php if ($help): ?]
        <span class="help-block">[?php echo __($help, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]</span>
      [?php elseif ($help = $form[$name]->renderHelp()): ?]
        <span class="help-block">[?php echo $help ?]</span>
      [?php endif; ?]
      </div>
  </div>
[?php endif; ?]
