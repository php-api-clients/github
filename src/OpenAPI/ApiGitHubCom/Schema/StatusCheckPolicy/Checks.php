<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy;

final class Checks
{
    public const SCHEMA_JSON = '{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string","examples":["continuous-integration\\/travis-ci"]},"app_id":{"type":["integer","null"]}}}';
    public const SCHEMA_EXAMPLE = '{"context":"continuous-integration\\/travis-ci"}';
    public const SCHEMA_TITLE = 'StatusCheckPolicy\\Checks';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $context;
    public readonly ?int $app_id;
    public function __construct(string $context, int $app_id)
    {
        $this->context = $context;
        $this->app_id = $app_id;
    }
}
