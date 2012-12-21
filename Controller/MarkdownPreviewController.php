<?php
class MarkdownPreviewController extends MarkdownAppController
{
    public $uses = array();
    
    public $components = array(
        'RequestHandler',
    );
    
    public $helpers = array(
        'Markdown',
    );
    
    public function preview()
    {
    }
}