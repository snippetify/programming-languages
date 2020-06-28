<?php
/*
 * This file is part of the snippetify package.
 *
 * (c) Evens Pierre <evenspierre@snippetify.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snippetify\ProgrammingLanguages\Facades;

use Snippetify\ProgrammingLanguages\Languages as BaseLanguages;

final class Languages
{
    /**
     * Static call.
     *
     * @return any
     */
    public static function __callStatic($name, $arguments)
    {
        $languages = BaseLanguages::create();

        if (method_exists($languages, $name)) {
            return $languages->{$name}(...$arguments);
        }

        return null;
    }
}