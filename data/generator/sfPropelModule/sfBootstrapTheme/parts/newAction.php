  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this-><?php echo $this->getSingularName() ?> = $this->form->getObject();
<?php echo $this->getFormCustomization('new') ?>
    $this->configureForm();
  }
