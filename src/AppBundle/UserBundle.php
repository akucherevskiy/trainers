<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 27.01.16
 * Time: 17:53
 */
namespace AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}