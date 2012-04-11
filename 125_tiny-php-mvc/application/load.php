<?php

class Load {

	function view( $file_name, $data = null)
		{
			if (is_array($data)) {
			extract($data);  // allows to access $data array elements by calling $element
			}
			include ('views/' . $file_name);
		}


}


?>