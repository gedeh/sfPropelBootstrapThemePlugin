[?php if ($sf_user->hasFlash('notice')): ?]
<div class="row mt-3">
  <div class="col">
    <div class="alert alert-success alert-dismissible" role="alert">
      [?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?]
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>
[?php endif; ?]

[?php if ($sf_user->hasFlash('error')): ?]
<div class="row mt-3">
  <div class="col">
    <div class="alert alert-error alert-dismissible" role="alert">
      [?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?]<a href="#" class="close" data-dismiss="alert">×</a>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>
[?php endif; ?]
