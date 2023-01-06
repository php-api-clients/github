<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MergeUpstream;

final class Request
{
    public const SCHEMA_JSON = '{"required":["branch"],"type":"object","properties":{"branch":{"type":"string","description":"The name of the branch which should be updated to match upstream."}}}';
    public const SCHEMA_TITLE = 'MergeUpstream\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the branch which should be updated to match upstream.
     */
    private string $branch;
    /**
     * The name of the branch which should be updated to match upstream.
     */
    public function branch() : string
    {
        return $this->branch;
    }
}
