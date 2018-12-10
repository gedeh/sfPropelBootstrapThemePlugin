<div class="row mt-3">
  <div class="col">

    <div class="card">
      [?php if ('NONE' != $fieldset): ?]
      <div class="card-header">
        [?php echo __($fieldset, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]
      </div>
      [?php endif; ?]

      <div class="card-body">
        [?php foreach ($fields as $name => $field): ?]
          [?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?]
          [?php include_partial('<?php echo $this->getModuleName() ?>/form_field', array(
            'name'       => $name,
            'attributes' => $field->getConfig('attributes', array()),
            'label'      => $field->getConfig('label'),
            'help'       => $field->getConfig('help'),
            'form'       => $form,
            'field'      => $field,
            'class'      => 'sf_admin_form_row sf_admin_'.strtolower($field->getType()).' sf_admin_form_field_'.$name,
            'helper'     => $helper
          )) ?]
        [?php endforeach; ?]
      </div>
    </div>

  </div>
</div>
