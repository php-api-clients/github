<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class GistCommit
{
    public const SCHEMA_TITLE       = 'Gist Commit';
    public const SCHEMA_DESCRIPTION = 'Gist Commit';
    private string $url;
    private string $version;
    private $user;
    private array $change_status = [];
    private string $committed_at;

    public function url(): string
    {
        return $this->url;
    }

    public function version(): string
    {
        return $this->version;
    }

    public function user()
    {
        return $this->user;
    }

    public function change_status(): array
    {
        return $this->change_status;
    }

    public function committed_at(): string
    {
        return $this->committed_at;
    }
}
