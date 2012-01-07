<?php

class Sites extends BlocksDataType
{
	static $hasSettings = true;
	static $hasContent = true;
	static $hasCustomBlocks = true;

	static $hasMany = array(
		'assetFolders' => 'AssetFolders.site',
		'routes'       => 'Routes.site',
		'sections'     => 'Sections.site'
	);

	static $attributes = array(
		'handle' => array('type' => AttributeType::String, 'maxSize' => 150, 'required' => true),
		'label'  => array('type' => AttributeType::String, 'maxSize' => 500, 'required' => true),
		'url'    => array('type' => AttributeType::String, 'maxSize' => 250, 'required' => true)
	);
}
