<?php
namespace PhpBrew;
use CLIFramework\Application;

class Console extends Application
{
    const NAME = 'phpbrew';
    const VERSION = "1.13.0";

    public function init()
    {
        parent::init();
        $this->registerCommand('init');
        $this->registerCommand('known');
        $this->registerCommand('install');
        $this->registerCommand('upgrade');
        $this->registerCommand('list');
        $this->registerCommand('use');
        $this->registerCommand('switch');

        $this->registerCommand('info');
        $this->registerCommand('env');
        $this->registerCommand('ext');
        $this->registerCommand('variants');
        $this->registerCommand('path');
        $this->registerCommand('cd');
        $this->registerCommand('download');
        $this->registerCommand('clean');
        $this->registerCommand('ctags', 'PhpBrew\Command\CtagsCommand');

        $this->registerCommand('enable',     'PhpBrew\Command\MigratedCommand');
        $this->registerCommand('install-ext','PhpBrew\Command\MigratedCommand');

        $this->registerCommand('self-update', 'PhpBrew\Command\SelfUpdateCommand');

        $this->registerCommand('remove');
        $this->registerCommand('purge');
    }

    public function brief()
    {
        return 'brew your latest php!';
    }
}
