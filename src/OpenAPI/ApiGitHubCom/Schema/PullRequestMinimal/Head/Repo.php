<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal\Head;

final readonly class Repo
{
    public const SCHEMA_JSON        = '{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $id;
    public ?string $url;
    public ?string $name;

    public function __construct(int $id, string $url, string $name)
    {
        $this->id   = $id;
        $this->url  = $url;
        $this->name = $name;
    }
}
