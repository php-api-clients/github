<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class CheckRunPullRequest
{
    public const SCHEMA_TITLE       = 'Check Run Pull Request';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $url            = null;
    private ?int $id                = null;
    private ?int $number            = null;
    private array $head             = [];
    private array $base             = [];

    public function url(): ?string
    {
        return $this->url;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function number(): ?int
    {
        return $this->number;
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
