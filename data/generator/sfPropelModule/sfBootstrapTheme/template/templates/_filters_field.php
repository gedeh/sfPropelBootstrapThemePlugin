[?php if ($field->isPartial()): ?]
  [?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
  [?php include_component('<?php echo $this->getModuleName() ?>', $name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
  <div class="form-group [?php echo $class ?]">
      [?php echo $form[$name]->renderLabel($label, array('class'=> 'control-label')) ?]

      [?php echo $helper->renderFormField($form[$name], $attributes) ?]

      [?php if ($form[$name]->hasError()): ?]
      <div class="invalid-feedback" generated="true">
      [?php echo $form[$name]->renderError() ?]
      </div>
      [?php endif; ?]

      [?php if ($help || $help = $form[$name]->renderHelp()): ?]
      <small class="form-text text-muted">[?php echo __($help, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]</small>
      [?php endif; ?]
  </div>
[?php endif; ?]
