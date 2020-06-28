<?php

/*
 * This file is part of the snippetify package.
 *
 * (c) Evens Pierre <evenspierre@snippetify.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snippetify\ProgrammingLanguages\Tests;

use PHPUnit\Framework\TestCase;
use Snippetify\ProgrammingLanguages\Languages;

final class LanguagesTest extends TestCase
{
    /**
     * Languages.
     *
     * @var string
     */
    private $languages;


    protected function setUp(): void
    {
        $this->languages = Languages::create();
    }


    public function testLanguageExists()
    {
        $this->assertTrue($this->languages->exists('php'));
    }

    public function testLanguageNotExists()
    {
        $this->assertFalse($this->languages->exists('lorem'));
    }

    public function testContainsResults()
    {
        $this->assertGreaterThan(0, $this->languages->count());
    }
}
