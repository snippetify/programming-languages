<?php
/*
 * This file is part of the snippetify package.
 *
 * (c) Evens Pierre <evenspierre@snippetify.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snippetify\ProgrammingLanguages;

final class Languages
{
    /**
     * Languages.
     *
     * @var string
     */
    private $languages;

    /**
     * Singletion.
     *
     * @var self
     */
    private static $instance;

    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->languages = require dirname(__FILE__) . '/../data/languages.php'; 
    }

    /**
     * Create an instance.
     *
     * @return  self
     */
    public static function create(): self
    {
        if (is_null(self::$instance)) self::$instance = new self;

        return self::$instance;
    }

    /**
     * All.
     *
     * @return array
     */
    public function all(): array
    {
        return $this->languages;
    }

    /**
     * Count.
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->languages);
    }

    /**
     * Exists.
     *
     * @return bool
     */
    public function exists(string $name): bool
    {
        return in_array(strtolower(trim($name)), array_map(function ($v) { return strtolower(trim($v)); }, $this->languages));
    }
}