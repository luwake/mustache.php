<?php

namespace Mustache\Loader;

use Mustache\Loader;

/*
 * This file is part of Mustache.php.
 *
 * (c) 2010-2017 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Mustache Template string Loader implementation.
 *
 * A StringLoader instance is essentially a noop. It simply passes the 'name' argument straight through:
 *
 *     $loader = new StringLoader;
 *     $tpl = $loader->load('{{ foo }}'); // '{{ foo }}'
 *
 * This is the default Template Loader instance used by Mustache:
 *
 *     $m = new Mustache;
 *     $tpl = $m->loadTemplate('{{ foo }}');
 *     echo $tpl->render(array('foo' => 'bar')); // "bar"
 */
class StringLoader implements Loader
{
    /**
     * Load a Template by source.
     *
     * @param string $name Mustache Template source
     *
     * @return string Mustache Template source
     */
    public function load($name)
    {
        return $name;
    }
}
