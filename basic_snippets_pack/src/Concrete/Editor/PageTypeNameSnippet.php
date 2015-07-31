<?php
namespace Concrete\Package\BasicSnippetsPack\Editor;

use Page;
use Concrete\Core\Editor\Snippet;

class PageTypeNameSnippet extends Snippet
{
    public function replace()
    {
        $c = Page::getCurrentPage();
        if (is_object($c)) {
            return $c->getPageTypeName();
        }
    }
}
