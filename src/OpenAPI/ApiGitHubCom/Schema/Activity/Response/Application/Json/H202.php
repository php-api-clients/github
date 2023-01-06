<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Activity\Response\Application\Json;

final class H202
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Activity\\Response\\Application\\Json\\H202';
    public const SCHEMA_DESCRIPTION = '';
    private string $message;
    private string $url;
    public function message() : string
    {
        return $this->message;
    }
    public function url() : string
    {
        return $this->url;
    }
}
