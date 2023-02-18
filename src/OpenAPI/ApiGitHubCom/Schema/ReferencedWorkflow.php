<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class ReferencedWorkflow
{
    public const SCHEMA_JSON        = '{"title":"Referenced workflow","required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"sha":{"type":"string"},"ref":{"type":"string"}},"description":"A workflow referenced\\/reused by the initial caller workflow"}';
    public const SCHEMA_TITLE       = 'Referenced workflow';
    public const SCHEMA_DESCRIPTION = 'A workflow referenced/reused by the initial caller workflow';
    public ?string $path;
    public ?string $sha;
    public string $ref;

    public function __construct(string $path, string $sha, string $ref)
    {
        $this->path = $path;
        $this->sha  = $sha;
        $this->ref  = $ref;
    }
}
