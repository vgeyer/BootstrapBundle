<?php
/*
 * This file is part of the lxBootstrapBundle
 *
 * (c) Victor J. C. Geyer <victorgeyer@ciscaja.com>
 */

namespace lx\BootstrapBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class lxBootstrapBundle extends Bundle
{
    public function build(\Symfony\Component\DependencyInjection\ContainerBuilder $container) {
        $container->setParameter("assetic.sass.sources.boostrap", __DIR__.'/scss');
    }
}
