<?php declare(strict_types=1);

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
    /**
     * @var string
     */
    protected $sha;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var array
     */
    protected $tree;

    /**
     * @var bool
     */
    protected $truncated;

    /**
     * @return string
     */
    public function sha(): string
    {
        return $this->sha;
    }

    /**
     * @return string
     */
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

    /**
     * @return bool
     */
    public function truncated(): bool
    {
        return $this->truncated;
    }
}
