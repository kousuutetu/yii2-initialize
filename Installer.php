<?php
namespace Jeff\initialize;

/**
* Initialize Installer
*/
class Installer
{
    public static function postInstall()
    {
        echo "postInstall\n";
    }
    
    public static function postPackageInstall()
    {
        echo "postPackageInstall\n";
    }
}
