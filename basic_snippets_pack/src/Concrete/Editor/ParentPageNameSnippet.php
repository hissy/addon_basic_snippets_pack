<?php
namespace Concrete\Package\BasicSnippetsPack\Editor;

use Page;
use Concrete\Core\Editor\Snippet;

class ParentPageNameSnippet extends Snippet
{
    public function replace()
    {
        $c = Page::getCurrentPage();
        if (is_object($c)) {
            $parent = Page::getByID($c->getCollectionParentID());
            if (is_object($parent)) {
                return $parent->getCollectionName();
            }
        }
    }
}
