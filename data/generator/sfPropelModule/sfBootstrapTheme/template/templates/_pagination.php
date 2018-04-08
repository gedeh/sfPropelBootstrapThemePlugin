<nav aria-label="[?php echo __('Pagination') ?]">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=1" title="[?php echo __('First page', array(), 'sf_admin') ?]">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">[?php echo __('First page', array(), 'sf_admin') ?]</span>
        <i class="icon-fast-backward"></i>
      </a>
    </li>

    <li class="page-item">
      <a class="page-link" href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getPreviousPage() ?]" title="[?php echo __('Previous page', array(), 'sf_admin') ?]">
        <i class="icon-backward"></i>
      </a>
    </li>

  [?php foreach ($pager->getLinks() as $page): ?]
    [?php if ($page == $pager->getPage()): ?]
      <li class="page-item active disabled">
        <span class="page-link">[?php echo $page ?]</a>
      </li>
    [?php else: ?]
      <li class="page-item">
        <a class="page-link" href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $page ?]">[?php echo $page ?]</a>
      </li>
    [?php endif; ?]
  [?php endforeach; ?]

    <li class="page-item">
      <a class="page-link" href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getNextPage() ?]" title="[?php echo __('Next page', array(), 'sf_admin') ?]">
        <i class="icon-forward"></i>
      </a>
    </li>

    <li class="page-item">
      <a class="page-link" href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getLastPage() ?]" title="[?php echo __('Last page', array(), 'sf_admin') ?]">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">[?php echo __('Last page', array(), 'sf_admin') ?]</span>
        <i class="icon-fast-forward"></i>
      </a>
    </li>
  </ul>
</div>
