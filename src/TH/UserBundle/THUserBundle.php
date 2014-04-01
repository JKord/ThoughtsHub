<?php

namespace TH\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class THUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
