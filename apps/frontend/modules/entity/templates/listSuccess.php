<?php
/* @var MainCategory $category */
/* @var array        $entityTypes */
/* @var array        $entities */
/* @var array        $additionalSortingCriteria */
?>

<h2>Types d'entités</h2>
<?php foreach ($entityTypes as $entityTypeName): ?>
	<li><?php echo link_to($entityTypeName, sprintf('@entity_list?slugCategory=%s&entityType=%s', $sf_request->getParameter('slugCategory'), $entityTypeName)) ?></li>
<?php endforeach; ?>

<?php if (count($additionalSortingCriteria)): ?>
	<h2>Critères de tri</h2>
	<hr />
	<?php foreach ($additionalSortingCriteria as $criteriaValue): ?>
		<li><?php echo link_to($criteriaValue, sprintf('@entity_list_criteria?slugCategory=%s&entityType=%s&criteria=%s', $sf_request->getParameter('slugCategory'), $sf_request->getParameter('entityType'), $criteriaValue)) ?></li>
	<?php endforeach; ?>
<?php endif; ?>

<hr />
<h2>Entités</h2>
<?php /* @var Entity $entity */?>
<?php foreach ($entities as $entity): ?>
	<li><?php echo link_to($entity->title, sprintf('@entity_view?slugCategory=%s&entityType=%s&slugEntity=%s', $sf_request->getParameter('slugCategory'), $entity->type, $entity->slug)) ?></li>
<?php endforeach; ?>