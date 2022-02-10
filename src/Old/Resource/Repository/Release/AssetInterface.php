<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Release;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface AssetInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\Release\\Asset';

    public function url(): string;

    public function browserDownloadUrl(): string;

    public function id(): int;

    public function name(): string;

    public function label(): string;

    public function state(): string;

    public function contentType(): string;

    public function size(): int;

    public function downloadCount(): int;

    public function createdAt(): DateTimeInterface;

    public function updatedAt(): DateTimeInterface;

    public function uploader(): User;
}
