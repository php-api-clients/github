<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Git\EmptyNamedBlob")
 */
abstract class NamedBlob extends AbstractResource implements NamedBlobInterface
{
    protected string $path;

    protected string $mode;

    protected string $type;

    protected int $size;

    protected string $sha;

    protected string $url;

    public function path(): string
    {
        return $this->path;
    }

    public function mode(): string
    {
        return $this->mode;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function size(): int
    {
        return $this->size;
    }

    public function sha(): string
    {
        return $this->sha;
    }

    public function url(): string
    {
        return $this->url;
    }
}
