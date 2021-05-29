<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class GitRef
{
    public const SCHEMA_TITLE       = 'Git Reference';
    public const SCHEMA_DESCRIPTION = 'Git references within a repository';
    private string $ref;
    private string $node_id;
    private string $url;
    private array $object = [];

    public function ref(): string
    {
        return $this->ref;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function object(): array
    {
        return $this->object;
    }
}
