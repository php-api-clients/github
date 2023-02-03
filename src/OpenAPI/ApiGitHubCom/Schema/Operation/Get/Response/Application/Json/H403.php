<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Get\Response\Application\Json;

final class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"block":{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Operation\\Get\\Response\\Application\\Json\\H403';
    public const SCHEMA_DESCRIPTION = '';
    public readonly array $block;
    public readonly string $message;
    public readonly string $documentation_url;
    public function __construct(array $block, string $message, string $documentation_url)
    {
        $this->block = $block;
        $this->message = $message;
        $this->documentation_url = $documentation_url;
    }
}