[?php if ($field->isPartial()): ?]
  [?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
  [?php include_component('<?php echo $this->getModuleName() ?>', $name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
  <div class="form-group mb-3 [?php if ($form->getValidatorSchema()->offsetExists($name)) echo ($form->getValidator($name)->getOption('required') && !$form[$name]->hasError()) ? 'text-primary' : null ?][?php $form[$name]->hasError() and print 'text-error' ?]">
      <strong>
        [?php echo $form[$name]->renderLabel($label, array('class'=>'control-label')) ?]
      </strong>

      [?php echo $helper->renderFormField($form[$name], $attributes) ?]
      [?php if ($form[$name]->hasError()): ?]
        <div class="invalid-feedback">[?php echo $form[$name]->renderError() ?]</div>
      [?php endif; ?]

      [?php if ($help): ?]
        <small class="form-text text-muted">[?php echo __($help, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]</small>
      [?php elseif ($help = $form[$name]->renderHelp()): ?]
        <small class="form-text text-muted">[?php echo $help ?]</small>
      [?php endif; ?]
  </div>
[?php endif; ?]
