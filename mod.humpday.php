<?php

class Modifier_humpday extends Modifier {

	var $meta = array(
			'name' => 'Humpday',
			'description' => 'A Statamic modifier to camelCase a variable',
			'version' => '1.0',
			'author' => 'Jeremy Sexton',
			'author_url' => 'http://jeremysexton.net',
			'author_twitter' => '@jeremysexton',
			'kudos' => 'Big ups to Mendoweb for helping out a php toddler in need',
			'kudos_url' => 'http://www.mendoweb.be/blog/php-convert-string-to-camelcase-string/',
	);

    public function index($value, $parameters=array()) {
          
        $value = ucwords($value);
        $value = trim($value);
        $value = lcfirst($value);
        $value = str_replace(" ", "", $value);
        
        return $value;
    }
}
