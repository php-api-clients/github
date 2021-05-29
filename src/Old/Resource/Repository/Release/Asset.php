<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Release;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @Nested(
 *     uploader="User"
 * )
 * @EmptyResource("Repository\Release\EmptyAsset")
 */
abstract class Asset extends AbstractResource implements AssetInterface
{
    protected string $url;

    protected string $browser_download_url;

    protected int $id;

    protected string $name;

    protected string $label;

    protected string $state;

    protected string $content_type;

    protected int $size;

    protected int $download_count;

    protected DateTimeInterface $created_at;

    protected DateTimeInterface $updated_at;

    protected User $uploader;

    public function url(): string
    {
        return $this->url;
    }

    public function browserDownloadUrl(): string
    {
        return $this->browser_download_url;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function label(): string
    {
        return $this->label;
    }

    public function state(): string
    {
        return $this->state;
    }

    public function contentType(): string
    {
        return $this->content_type;
    }

    public function size(): int
    {
        return $this->size;
    }

    public function downloadCount(): int
    {
        return $this->download_count;
    }

    public function createdAt(): DateTimeInterface
    {
        return $this->created_at;
    }

    public function updatedAt(): DateTimeInterface
    {
        return $this->updated_at;
    }

    public function uploader(): User
    {
        return $this->uploader;
    }
}
