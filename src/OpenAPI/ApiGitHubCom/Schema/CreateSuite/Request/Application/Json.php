<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateSuite\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["head_sha"],"type":"object","properties":{"head_sha":{"type":"string","description":"The sha of the head commit."}}}';
    public const SCHEMA_TITLE = 'CreateSuite\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The sha of the head commit.
     */
    private string $head_sha;
    /**
     * The sha of the head commit.
     */
    public function head_sha() : string
    {
        return $this->head_sha;
    }
}
