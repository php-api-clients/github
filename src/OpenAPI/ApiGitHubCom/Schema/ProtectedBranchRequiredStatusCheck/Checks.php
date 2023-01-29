<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchRequiredStatusCheck;

final class Checks
{
    public const SCHEMA_JSON = '{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string"},"app_id":{"type":["integer","null"]}}}';
    public const SCHEMA_TITLE = 'ProtectedBranchRequiredStatusCheck\\Checks';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $context;
    public readonly ?int $app_id;
    public function __construct(string $context, int $app_id)
    {
        $this->context = $context;
        $this->app_id = $app_id;
    }
}
