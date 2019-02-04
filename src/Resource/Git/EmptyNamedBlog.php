<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyNamedBlog implements NamedBlogInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function path(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function mode(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function type(): string
    {
        return null;
    }

    /**
     * @return int
     */
    public function size(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function sha(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return null;
    }
}
