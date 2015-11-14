<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'File',
	'hash_method'  => 'sha256',
	'hash_key'     => 'skythe_blow',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		// 'admin' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
//            'admin' => 'd374edb13675149d94c99eeec2164ced2359e68a0c8a558ac612aaae4551bb08',
            'yevgen' => 'bc49278584c7f87dc3421ee074bedf504ace0aa546c8ec262552284318a6750e',
//            'content' => 'a9823da163b88d503665c328e70fb086778562e1ae8062ecd9843d86833ac6a5',            
	),

);
