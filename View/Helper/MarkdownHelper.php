<?php

App::import('Vendor', 'Markdown.markdown', array('file' => 'markdown.php'));

class MarkdownHelper extends AppHelper
{
	public function render($text)
	{
	    return Markdown($text);
	}
};

?>