[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

<div class="row">
  <section class="col<?php if ($this->configuration->getValue('template.span') != 0): ?>-<?php echo $this->configuration->getValue('template.span') ?><?php endif ?>" id="content">

    <div class="row">
      <div class="col">
        <h1>[?php echo <?php echo $this->getI18NString('list.title') ?> ?]</h1>
      </div>
    </div>

    [?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]

    <div class="row">
      <div class="col">
        <div class="btn-toolbar" role="toolbar">
          [?php include_partial('<?php echo $this->getModuleName() ?>/filters', array('form' => $filters, 'configuration' => $configuration)) ?]
          [?php include_partial('<?php echo $this->getModuleName() ?>/list_actions', array('helper' => $helper)) ?]
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col">
        <?php if ($this->configuration->getValue('list.batch_actions')): ?>
        <form class="form-inline" action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')) ?]" method="post">
        <?php endif; ?>
        [?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?]
        <div class="row mt-3">
          <div class="col">
            <!--div class="form-actions"-->
            <div class="btn-toolbar" role="toolbar">
            [?php include_partial('<?php echo $this->getModuleName() ?>/list_batch_actions', array('helper' => $helper)) ?]
            [?php include_partial('<?php echo $this->getModuleName() ?>/list_actions', array('helper' => $helper)) ?]
            </div>
          </div>
        </div>
            <!--/div-->
        <?php if ($this->configuration->getValue('list.batch_actions')): ?>
        </form>
        <?php endif; ?>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col">
        [?php include_partial('<?php echo $this->getModuleName() ?>/list_footer', array('pager' => $pager)) ?]
      </div>
    </div>

  </section> <!-- <section id="content"> -->
</div>