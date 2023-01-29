<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Pulls\Response\Application\Json;

final class H202
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Operation\\Pulls\\Response\\Application\\Json\\H202';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $message;
    public readonly string $url;
    public function __construct(string $message, string $url)
    {
        $this->message = $message;
        $this->url = $url;
    }
}
