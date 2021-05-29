<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class OrgHook
{
    public const SCHEMA_TITLE       = 'Org Hook';
    public const SCHEMA_DESCRIPTION = 'Org Hook';
    private int $id;
    private string $url;
    private string $ping_url;
    private string $name;
    private array $events = [];
    private bool $active;
    private array $config = [];
    private string $updated_at;
    private string $created_at;
    private string $type;

    public function id(): int
    {
        return $this->id;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function ping_url(): string
    {
        return $this->ping_url;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function events(): array
    {
        return $this->events;
    }

    public function active(): bool
    {
        return $this->active;
    }

    public function config(): array
    {
        return $this->config;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function type(): string
    {
        return $this->type;
    }
}