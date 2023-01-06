<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListAlertsForOrg\Response\Application\Json;

final class H503
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'ListAlertsForOrg\\Response\\Application\\Json\\H503';
    public const SCHEMA_DESCRIPTION = '';
    private string $code;
    private string $message;
    private string $documentation_url;
    public function code() : string
    {
        return $this->code;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function documentation_url() : string
    {
        return $this->documentation_url;
    }
}
