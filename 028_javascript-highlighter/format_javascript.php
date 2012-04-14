<?php
/* Formatting, Highlighting and Indenting of Javascript using PHP */
/* Created by Benjamin Mayo and Chris Coyier */
/*
@name format_javascript
	@param (string)$data
		A string of unformatted javascript code, potentially gained from a file using file_get_contents(). The function assumes that <script> tags are EXCLUDED from the string.
		
	@param (bool)$advanced_optimizations | false |
		A boolean value to set whether for the function to perform advanced optimizations on the code. This currently includes the expansion of ternary statements, for easier viewing.
		!WARNING! - This is set to false by default as these extra parses have been known to cause issues in some circumstances and may cause errors in the code.
	
	@param (string)$c_string | "#DD0000" |
		A string of a hexadecimal value that strings detected in the source javascript are coloured as.
	
	@param (string)$c_comment | "#FF8000" |
		A string of a hexadecimal value that comments detected in the source javascript are coloured as.
		
	@param (string)$c_keyword | "#007700" |
		A string of a hexadecimal value that keywords detected in the source javascript are coloured as.		
	
	@param (string)$c_default | "#007700" |
		A string of a hexadecimal value that other statements found detected in the source javascript are coloured as.	
	
	@param (string)$c_html | "#0000BB" |
		A string of a hexadecimal value that fragments of HTML found detected in the source javascript are coloured as.

	@param (bool)$flush_on_closing_brace | false |
		A boolean value to set whether closing braces should be flushed (as in example A) or left at the current indendation (example B).
			Example A)		 |	Example B)
				if (true) {	 |		if (true) {
					exec();	 |			exec();
				}			 |			}
				
	!WARNING! - Some hosts disable usage of the ini_set() function, which means there is no way to inform the parser of custom colours. This means that - under certain conditions - colour customizations will not be able to occur.
	
	@return string
		Returns the formatted javascript in accordance to the parameters set
		
	!! ALTERNATIVE USAGE !!

	format_javascript($data, $options) 
	
	So, rather than setting all parameters at once, you can provide the string of $data, and give extra options as an associative array (keys are the name of each parameter) akin to that of jQuery plugins.	
*/
function format_javascript($data, $options = false, $c_string = "#DD0000", $c_comment = "#FF8000", $c_keyword = "#007700", $c_default = "#0000BB", $c_html = "#0000BB", $flush_on_closing_brace = false) {

if (is_array($options)) { // check for alternative usage
	extract($options, EXTR_OVERWRITE); // extract the variables from the array if so
} else {
$advanced_optimizations = $options; // otherwise carry on as normal
}
@ini_set('highlight.string', $c_string); // Set each colour for each part of the syntax
@ini_set('highlight.comment', $c_comment); // Suppression has to happen as some hosts deny access to ini_set and there is no way of detecting this
@ini_set('highlight.keyword', $c_keyword);
@ini_set('highlight.default', $c_default);
@ini_set('highlight.html', $c_html);

if ($advanced_optimizations) { // if the function has been allowed to perform potential (although unlikely) code-destroying or erroneous edits
$data = preg_replace('/([$a-zA-z09]+) = \((.+)\) \? ([^]*)([ ]+)?\:([ ]+)?([^=\;]*)/', 'if ($2) {'."\n".' $1 = $3; }'."\n".'else {'."\n".' $1 = $5; '."\n".'}', $data); // expand all BASIC ternary statements into full if/elses
}

$data = str_replace(array(') { ', ' }', ";", "\r\n"), array(") {\n", "\n}", ";\n", "\n"), $data); // Newlinefy all braces and change Windows linebreaks to Linux (much nicer!) 
$data = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $data); // Regex identifies all extra empty lines produced by the str_replace above. It is quicker to do it like this than deal with a more complicated regular expression above.
$data = str_replace("<?php", "<script>", highlight_string("<?php \n" . $data . "\n?>", true)); 

$data = explode("\n", str_replace(array("<br />"), array("\n"),$data));

# experimental tab level highlighting
$tab = 0;
$output = '';

foreach ($data as $line) { 
	$lineecho = $line;
        if (substr_count($line, "\t") != $tab) {
	$lineecho = str_replace("\t", "", trim($lineecho));
	$lineecho = str_repeat("\t", $tab) . $lineecho;
	}
        $tab = $tab + substr_count($line, "{") - substr_count($line, "}");
	if ($flush_on_closing_brace && trim($line) == "}") {
	$output .= '}';
	} else {
	$output .= str_replace(array("{}", "[]"), array("<span style='color:".$c_string."!important;'>{}</span>", "<span style='color:".$c_string." !important;'>[]</span>"), $lineecho."\n"); // Main JS specific thing that is not matched in the PHP parser
	}
	
	}

$output = str_replace(array('?php', '?&gt;'), array('script type="text/javascript">', '&lt;/script&gt;'), $output); // Add nice and friendly <script> tags around highlighted text

return '<pre id="code_highlighted">'.$output."</pre>";
}
?>