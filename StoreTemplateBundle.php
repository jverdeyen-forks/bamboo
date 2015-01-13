<?php

/**
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\StoreTemplateBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

use Elcodi\Bundle\BambooBundle\Interfaces\TemplateBundleInterface;

/**
 * Class StoreTemplateBundle
 */
class StoreTemplateBundle extends Bundle implements TemplateBundleInterface
{
    /**
     * Get the template bundle
     *
     * @return string Template name
     */
    public function getTemplateName()
    {
        return 'store_template';
    }
}
