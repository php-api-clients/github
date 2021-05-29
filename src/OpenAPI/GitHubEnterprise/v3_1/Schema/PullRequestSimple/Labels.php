<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PullRequestSimple;

final class Labels
{
    public const SCHEMA_TITLE       = 'pull-request-simple::labels';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $id                = null;
    private ?string $node_id        = null;
    private ?string $url            = null;
    private ?string $name           = null;
    private ?string $description    = null;
    private ?string $color          = null;
    private ?bool $default          = null;

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function color(): ?string
    {
        return $this->color;
    }

    public function default(): ?bool
    {
        return $this->default;
    }
}
