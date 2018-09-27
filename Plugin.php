<?php

namespace Kanboard\Plugin\bak2topbotm;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', array('template' => 'plugins/Bak2topbotm/topbotm.css'));
        $this->hook->on('template:layout:js', array('template' => 'plugins/Bak2topbotm/topbotm.js'));
        $this->template->hook->attach('template:task:details:top', 'bak2topbotm:task/topbotm');
    }
    public function getPluginName()
    {
        return 'bak2topbotm';
    }
    public function getPluginDescription()
    {
        return t('Back to Top Button');
    }
    public function getPluginAuthor()
    {
        return 'Craig Crosby';
    }
    public function getPluginVersion()
    {
        return '0.0.1';
    }
    public function getPluginHomepage()
    {
        return 'https://github.com/creecros/bak2topbotm';
    }
    public function getCompatibleVersion()
    {
        return '>=1.0.43';
    }
}
