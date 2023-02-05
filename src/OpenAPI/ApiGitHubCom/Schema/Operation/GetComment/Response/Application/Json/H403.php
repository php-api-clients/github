<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\GetComment\Response\Application\Json;

final class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"block":{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Operation\\GetComment\\Response\\Application\\Json\\H403';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H403\Block $block;
    public readonly string $message;
    public readonly string $documentation_url;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H403\Block $block, string $message, string $documentation_url)
    {
        $this->block = $block;
        $this->message = $message;
        $this->documentation_url = $documentation_url;
    }
}
