<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace YangXiaoHui\Plugin;
use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;
/**
 * Description of CreatePorject
 *
 * @author Administrator
 */
class ProjectInstall extends LibraryInstaller
{

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'test';
    }


    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
         return 'yang-project' === $packageType;
    }
}