<h2>Edit Source Branch #<?php echo $version->id; ?></h2>
<br>

<?php echo \Theme::instance()->view('documentation/admin/branches/_form', array('version' => $version, 'form' => 'edit', 'versions' => $versions)); ?>

<p>
	<?php echo Html::anchor('documentation/admin/branches/view/'.$version->id, 'View', array('class' => 'btn')); ?>
	<?php echo Html::anchor('documentation/admin/branches', 'Index', array('class' => 'btn')); ?>
</p>
