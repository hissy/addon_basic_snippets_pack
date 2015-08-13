<?php 
namespace Concrete\Package\BasicSnippetsPack;

use Concrete\Core\Backup\ContentImporter;

class Controller extends \Concrete\Core\Package\Package
{
    protected $pkgHandle = 'basic_snippets_pack';
    protected $appVersionRequired = '5.7.5';
    protected $pkgVersion = '0.9';
    protected $pkgAutoloaderMapCoreExtensions = true;
    
    public function getPackageName()
    {
        return t('Basic Snippets Pack');
    }
    
    public function getPackageDescription()
    {
        return t('Adds useful snippets to Redactor editor in your site.');
    }
    
    public function install()
    {
        $pkg = parent::install();
        $ci = new ContentImporter();
        $ci->importContentFile($pkg->getPackagePath() . '/config/install.xml');
    }
}
