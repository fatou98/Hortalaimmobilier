<?php

namespace HTL\ImmobilierBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class HTLImmobilierBundle extends Bundle
{
 public function getParent()
    {
        return 'FOSUserBundle';
    }
}
