<?php
namespace Concrete\Package\BasicSnippetsPack\Editor;

use Page;
use UserInfo;
use Concrete\Core\Editor\Snippet;

class PageAuthorNameSnippet extends Snippet
{
    public function replace()
    {
        $c = Page::getCurrentPage();
        if (is_object($c)) {
            $user = UserInfo::getByID($c->getCollectionUserID());
            if (is_object($user)) {
                return $user->getUserDisplayName();
            }
        }
    }
}
