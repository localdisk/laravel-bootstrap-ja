@if ($message = Session::get('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4>Success</h4>
    <?= e($message) ?>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4>Error</h4>
    <?= e($message) ?>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4>Warning</h4>
    <?= e($message) ?>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4>Info</h4>
    <?= e($message) ?>
</div>
@endif