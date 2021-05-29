<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class DeployKey
{
    public const SCHEMA_TITLE       = 'Deploy Key';
    public const SCHEMA_DESCRIPTION = 'An SSH key granting access to a single repository.';
    private int $id;
    private string $key;
    private string $url;
    private string $title;
    private bool $verified;
    private string $created_at;
    private bool $read_only;

    public function id(): int
    {
        return $this->id;
    }

    public function key(): string
    {
        return $this->key;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function verified(): bool
    {
        return $this->verified;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function read_only(): bool
    {
        return $this->read_only;
    }
}