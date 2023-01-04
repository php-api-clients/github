<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchRequiredStatusCheck;

final class Checks
{
    public const SCHEMA_JSON = '{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string"},"app_id":{"type":["integer","null"]}}}';
    public const SCHEMA_TITLE = 'ProtectedBranchRequiredStatusCheck\\Checks';
    public const SCHEMA_DESCRIPTION = '';
    private string $context;
    private ?int $app_id;
    public function context() : string
    {
        return $this->context;
    }
    public function app_id() : ?int
    {
        return $this->app_id;
    }
}
