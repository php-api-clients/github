<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag;

final readonly class Object_
{
    public const SCHEMA_JSON        = '{"required":["sha","type","url"],"type":"object","properties":{"sha":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $sha;
    public ?string $type;
    public ?string $url;

    public function __construct(string $sha, string $type, string $url)
    {
        $this->sha  = $sha;
        $this->type = $type;
        $this->url  = $url;
    }
}
