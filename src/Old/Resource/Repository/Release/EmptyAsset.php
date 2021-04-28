<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Release;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyAsset implements AssetInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function url(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function browserDownloadUrl(): string
    {
        return null;
    }

    /**
     * @return int
     */
    public function id(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function label(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function state(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function contentType(): string
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
     * @return int
     */
    public function downloadCount(): int
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function createdAt(): DateTimeInterface
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function updatedAt(): DateTimeInterface
    {
        return null;
    }

    /**
     * @return User
     */
    public function uploader(): User
    {
        return null;
    }
}
