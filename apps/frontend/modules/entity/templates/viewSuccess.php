<?php

/* @var Entity $entity */
$entity = $sf_data->get('entity');
?>

<h2><?php echo $entity->title ?></h2>
<dl>
	<dt>Type</dt>
	<dd><?php echo $entity->type ?></dd>
	<dt>Author</dt>
	<dd><?php echo $entity->author ?></dd>
	<dt>Date created</dt>
	<dd><?php echo $entity->created_at ?></dd>
</dl>