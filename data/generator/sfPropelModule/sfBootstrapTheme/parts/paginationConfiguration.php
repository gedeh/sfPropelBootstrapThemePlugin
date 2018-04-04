  public function getPaginateMethod()
  {
    return '<?php echo isset($this->config['list']['paginate_method']) ? $this->config['list']['paginate_method'] : 'paginate' ?>';
<?php unset($this->config['list']['paginate_method']) ?>
  }

  public function getPagerMaxPerPage()
  {
    return <?php echo isset($this->config['list']['max_per_page']) ? (integer) $this->config['list']['max_per_page'] : 20 ?>;
<?php unset($this->config['list']['max_per_page']) ?>
  }

  public function getTemplatesSpan()
  {
    return <?php echo isset($this->config['template']['span']) ? (integer) $this->config['template']['span'] : 12 ?>;
<?php unset($this->config['template']['span']) ?>
  }