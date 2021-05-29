<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ApplicationGrant
{
    public const SCHEMA_TITLE       = 'Application Grant';
    public const SCHEMA_DESCRIPTION = 'The authorization associated with an OAuth Access.';
    private ?int $id                = null;
    private ?string $url            = null;
    private array $app              = [];
    private ?string $created_at     = null;
    private ?string $updated_at     = null;
    private array $scopes           = [];
    private $user;

    public function id(): ?int
    {
        return $this->id;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function app(): array
    {
        return $this->app;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function scopes(): array
    {
        return $this->scopes;
    }

    public function user()
    {
        return $this->user;
    }
}
