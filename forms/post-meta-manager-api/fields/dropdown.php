<?php	$has_groups = isset($has_groups) && is_bool($has_groups) ? $has_groups : false;	if (count($items) > 0) PostMetaManagerHelper::generate_dropdown($items, $saved_value, $has_groups, $identifier);?>