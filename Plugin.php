<?php

namespace Kanboard\Plugin\Bak2topbotm;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', array('template' => 'plugins/Bak2topbotm/topbotm.css'));
        $this->hook->on('template:layout:js', array('template' => 'plugins/Bak2topbotm/topbotm.js'));
        $this->template->hook->attach('template:task:details:first-column', 'bak2topbotm:task/gobot');
        $this->template->hook->attach('template:task:details:first-column', 'bak2topbotm:task/gotop');
        $this->template->hook->attach('template:task:show:bottom', 'bak2topbotm:task/b_section');
    }
    public function getPluginName()
    {
        return 'Bak2topbotm';
    }
    public function getPluginDescription()
    {
        return t('Back to Top & Bottom Buttons for Task Summary');
    }
    public function getPluginAuthor()
    {
        return 'Craig Crosby';
    }
    public function getPluginVersion()
    {
        return '0.0.2';
    }
    public function getPluginHomepage()
    {
        return 'https://github.com/creecros/Bak2topbotm';
    }
    public function getCompatibleVersion()
    {
        return '>=1.0.43';
    }
}
