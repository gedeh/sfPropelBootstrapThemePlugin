<?php if (isset($this->params['css']) && ($this->params['css'] !== false)): ?>
[?php use_stylesheet('<?php echo $this->params['css'] ?>', 'first') ?]
<?php elseif(!isset($this->params['css'])): ?>
[?php use_stylesheet('<?php echo sfConfig::get('sf_twbs_web_dir').'/css/bootstrap.min.css' ?>', 'first') ?]
[?php use_javascript('<?php echo sfConfig::get('sf_twbs_web_dir').'/js/bootstrap.min.js' ?>') ?]
<?php endif; ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">