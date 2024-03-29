<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace YangXiaoHui\Plugin;
use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
/**
 * Description of ProjectInstall
 *
 * @author Administrator
 */
class Install implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $manager = $composer->getInstallationManager();
        $manager->addInstaller(new ProjectInstall($io, $composer));

    }
}
