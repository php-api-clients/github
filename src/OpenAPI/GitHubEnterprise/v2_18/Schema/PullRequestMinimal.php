<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class PullRequestMinimal
{
    public const SCHEMA_TITLE       = 'Pull Request Minimal';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private int $number;
    private string $url;
    private array $head = [];
    private array $base = [];

    public function id(): int
    {
        return $this->id;
    }

    public function number(): int
    {
        return $this->number;
    }

    public function url(): string
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
