[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

  <section <?php if ($this->configuration->getValue('template.span') != 0): ?>class="span<?php echo $this->configuration->getValue('template.span') ?>"<?php endif ?> id="content">
    <div class="row">
      <div class="col">
        <h1>[?php echo <?php echo $this->getI18NString('edit.title') ?> ?]</h1>
      </div>
    </div>

    [?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]

    <div class="row">
      <div class="col">
        [?php include_partial('<?php echo $this->getModuleName() ?>/form_header', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration)) ?]
      </div>
    </div>

    <div class="row">
      <div class="col">
        [?php include_partial('<?php echo $this->getModuleName() ?>/form', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?]
      </div>
    </div>

    <div class="row">
      <div class="col">
        [?php include_partial('<?php echo $this->getModuleName() ?>/form_footer', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration)) ?]
      </div>
    </div>

  </section>
