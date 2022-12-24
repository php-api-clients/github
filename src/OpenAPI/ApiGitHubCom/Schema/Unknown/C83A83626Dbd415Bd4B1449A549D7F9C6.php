<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C83A83626Dbd415Bd4B1449A549D7F9C6
{
    public const SCHEMA_JSON = '{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string","examples":["continuous-integration\\/travis-ci"]},"app_id":{"type":["integer","null"]}}}';
    public const SCHEMA_TITLE = 'c_83a83626dbd415bd4b1449a549d7f9c6';
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
