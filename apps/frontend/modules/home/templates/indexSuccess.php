<?php /* @var MainCategory $mainCategory */?>
<?php foreach ($mainCategories as $mainCategory): ?>
	<li><?php echo link_to($mainCategory->title, sprintf('@entity_list_root?slugCategory=%s', $mainCategory->slug)) ?> (<?php echo $mainCategory->Entities->count() ?>)</li>
<?php endforeach; ?>