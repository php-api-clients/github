<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Release;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyAsset implements AssetInterface, EmptyResourceInterface
{
    public function url(): string
    {
        return null;
    }

    public function browserDownloadUrl(): string
    {
        return null;
    }

    public function id(): int
    {
        return null;
    }

    public function name(): string
    {
        return null;
    }

    public function label(): string
    {
        return null;
    }

    public function state(): string
    {
        return null;
    }

    public function contentType(): string
    {
        return null;
    }

    public function size(): int
    {
        return null;
    }

    public function downloadCount(): int
    {
        return null;
    }

    public function createdAt(): DateTimeInterface
    {
        return null;
    }

    public function updatedAt(): DateTimeInterface
    {
        return null;
    }

    public function uploader(): User
    {
        return null;
    }
}
