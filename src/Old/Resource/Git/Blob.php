<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Hydrator\Annotation\Collection;
use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Collection(
 *     tree="Git\NamedBlob"
 * )
 * @EmptyResource("Git\EmptyBlob")
 */
abstract class Blob extends AbstractResource implements BlobInterface
{
    protected string $sha;

    protected string $url;

    /** @var array */
    protected array $tree;

    protected bool $truncated;

    public function sha(): string
    {
        return $this->sha;
    }

    public function url(): string
    {
        return $this->url;
    }

    /**
     * @return array
     */
    public function tree(): array
    {
        return $this->tree;
    }

    public function truncated(): bool
    {
        return $this->truncated;
    }
}
