<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Git\EmptyNamedBlob")
 */
abstract class NamedBlob extends AbstractResource implements NamedBlobInterface
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $mode;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var int
     */
    protected $size;

    /**
     * @var string
     */
    protected $sha;

    /**
     * @var string
     */
    protected $url;

    /**
     * @return string
     */
    public function path(): string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function mode(): string
    {
        return $this->mode;
    }

    /**
     * @return string
     */
    public function type(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function size(): int
    {
        return $this->size;
    }

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
}
