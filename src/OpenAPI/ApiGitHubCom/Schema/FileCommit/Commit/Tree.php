<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Commit;

final readonly class Tree
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"url":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $url;
    public ?string $sha;

    public function __construct(string $url, string $sha)
    {
        $this->url = $url;
        $this->sha = $sha;
    }
}
