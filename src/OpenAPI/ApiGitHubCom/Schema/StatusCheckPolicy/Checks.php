<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy;

final class Checks
{
    public const SCHEMA_TITLE = 'status-check-policy::checks';
    public const SCHEMA_DESCRIPTION = '';
    private string $context;
    private ?int $app_id = null;
    public function context() : string
    {
        return $this->context;
    }
    public function app_id() : ?int
    {
        return $this->app_id;
    }
}
