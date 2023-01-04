<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy;

final class Checks
{
    public const SCHEMA_JSON = '{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string","examples":["continuous-integration\\/travis-ci"]},"app_id":{"type":["integer","null"]}}}';
    public const SCHEMA_TITLE = 'StatusCheckPolicy\\Checks';
    public const SCHEMA_DESCRIPTION = '';
    private string $context;
    private $app_id;
    public function context() : string
    {
        return $this->context;
    }
    public function app_id()
    {
        return $this->app_id;
    }
}
