<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MergeUpstream\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["branch"],"type":"object","properties":{"branch":{"type":"string","description":"The name of the branch which should be updated to match upstream."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'MergeUpstream\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the branch which should be updated to match upstream.
     */
    public readonly string $branch;
    public function __construct(string $branch)
    {
        $this->branch = $branch;
    }
}
