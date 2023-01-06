<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Pulls\Response\Application\Json;

final class H409
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Pulls\\Response\\Application\\Json\\H409';
    public const SCHEMA_DESCRIPTION = '';
    private string $message;
    private string $documentation_url;
    public function message() : string
    {
        return $this->message;
    }
    public function documentation_url() : string
    {
        return $this->documentation_url;
    }
}
