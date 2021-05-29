<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Workflow
{
    public const SCHEMA_TITLE       = 'Workflow';
    public const SCHEMA_DESCRIPTION = 'A GitHub Actions workflow';
    private ?int $id                = null;
    private ?string $node_id        = null;
    private ?string $name           = null;
    private ?string $path           = null;
    private ?string $state          = null;
    private ?string $created_at     = null;
    private ?string $updated_at     = null;
    private ?string $url            = null;
    private ?string $html_url       = null;
    private ?string $badge_url      = null;
    private ?string $deleted_at     = null;

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function path(): ?string
    {
        return $this->path;
    }

    public function state(): ?string
    {
        return $this->state;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function badge_url(): ?string
    {
        return $this->badge_url;
    }

    public function deleted_at(): ?string
    {
        return $this->deleted_at;
    }
}
