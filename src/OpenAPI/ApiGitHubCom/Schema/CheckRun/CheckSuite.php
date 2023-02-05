<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun;

final class CheckSuite
{
    public const SCHEMA_JSON = '{"required":["id"],"type":["object","null"],"properties":{"id":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'CheckRun\\CheckSuite';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $id;
    public function __construct(int $id)
    {
        $this->id = $id;
    }
}
