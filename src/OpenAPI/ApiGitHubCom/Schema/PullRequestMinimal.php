<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PullRequestMinimal
{
    public const SCHEMA_TITLE       = 'Pull Request Minimal';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $id                = null;
    private ?int $number            = null;
    private ?string $url            = null;
    private array $head             = [];
    private array $base             = [];

    public function id(): ?int
    {
        return $this->id;
    }

    public function number(): ?int
    {
        return $this->number;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function head(): array
    {
        return $this->head;
    }

    public function base(): array
    {
        return $this->base;
    }
}
