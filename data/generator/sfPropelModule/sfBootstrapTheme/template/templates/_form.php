[?php use_stylesheets_for_form($form) ?]
[?php use_javascripts_for_form($form) ?]

  [?php echo form_tag_for($form, '@<?php echo $this->params['route_prefix'] ?>', array('class'=>'form-horizontal')) ?]
    [?php echo $form->renderHiddenFields(false) ?]

    [?php include_partial('<?php echo $this->getModuleName() ?>/form_actions_upper', array(
      '<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>,
      'form' => $form,
      'configuration' => $configuration,
      'helper' => $helper)) ?]

    [?php if ($form->hasGlobalErrors()): ?]
    <div class="row mt-3">
      <div class="col">
        <div class="alert alert-danger" role="alert">
          [?php echo $form->renderGlobalErrors() ?]
        </div>
      </div>
    </div>
    [?php endif; ?]

    [?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?]
      [?php include_partial('<?php echo $this->getModuleName() ?>/form_fieldset', array(
        '<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>,
        'form' => $form,
        'fields' => $fields,
        'fieldset' => $fieldset,
        'helper' => $helper)) ?]
    [?php endforeach; ?]

    <div class="row mt-3">
      <div class="col">
        [?php include_partial('<?php echo $this->getModuleName() ?>/form_actions', array(
          '<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>,
          'form' => $form,
          'configuration' => $configuration,
          'helper' => $helper)) ?]
      </div>
    </div>
  </form>

