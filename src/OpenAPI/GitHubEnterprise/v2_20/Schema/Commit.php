<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class Commit
{
    public const SCHEMA_TITLE       = 'Commit';
    public const SCHEMA_DESCRIPTION = 'Commit';
    private ?string $url            = null;
    private ?string $sha            = null;
    private ?string $node_id        = null;
    private ?string $html_url       = null;
    private ?string $comments_url   = null;
    private array $commit           = [];
    private $author;
    private $committer;
    private array $parents = [];
    private array $stats   = [];
    private array $files   = [];

    public function url(): ?string
    {
        return $this->url;
    }

    public function sha(): ?string
    {
        return $this->sha;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function comments_url(): ?string
    {
        return $this->comments_url;
    }

    public function commit(): array
    {
        return $this->commit;
    }

    public function author()
    {
        return $this->author;
    }

    public function committer()
    {
        return $this->committer;
    }

    public function parents(): array
    {
        return $this->parents;
    }

    public function stats(): array
    {
        return $this->stats;
    }

    public function files(): array
    {
        return $this->files;
    }
}
