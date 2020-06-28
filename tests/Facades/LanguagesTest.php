<?php

/*
 * This file is part of the snippetify package.
 *
 * (c) Evens Pierre <evenspierre@snippetify.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snippetify\ProgrammingLanguages\Tests\Facades;

use PHPUnit\Framework\TestCase;
use Snippetify\ProgrammingLanguages\Facades\Languages;

final class LanguagesTest extends TestCase
{
    public function testLanguageExists()
    {
        $this->assertTrue(Languages::exists('php'));
    }

    public function testLanguageNotExists()
    {
        $this->assertFalse(Languages::exists('lorem'));
    }

    public function testMethodNotExists()
    {
        $this->assertNull(Languages::foo('lorem'));
    }

    public function testContainsResults()
    {
        $this->assertGreaterThan(0, Languages::count());
    }
}
