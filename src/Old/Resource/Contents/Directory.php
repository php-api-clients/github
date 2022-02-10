<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     _links="Contents\Links"
 * )
 * @EmptyResource("Contents\EmptyDirectory")
 */
abstract class Directory extends AbstractResource implements DirectoryInterface
{
    protected string $type;

    protected string $encoding;

    protected int $size;

    protected string $name;

    protected string $path;

    protected string $sha;

    protected string $url;

    protected string $git_url;

    protected string $html_url;

    protected string $download_url;

    protected string $repository_fullname;

    /** @var Links */
    // @codingStandardsIgnoreStart
    protected $_links;
    // @codingStandardsIgnoreEnd

    public function type(): string
    {
        return $this->type;
    }

    public function encoding(): string
    {
        return $this->encoding;
    }

    public function size(): int
    {
        return $this->size;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function path(): string
    {
        return $this->path;
    }

    public function sha(): string
    {
        return $this->sha;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function gitUrl(): string
    {
        return $this->git_url;
    }

    public function htmlUrl(): string
    {
        return $this->html_url;
    }

    public function downloadUrl(): string
    {
        return $this->download_url;
    }

    public function repositoryFullname(): string
    {
        return $this->repository_fullname;
    }

    public function links(): Links
    {
        return $this->_links;
    }
}
