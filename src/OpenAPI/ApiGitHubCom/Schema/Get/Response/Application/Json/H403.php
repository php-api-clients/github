<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Get\Response\Application\Json;

final class H403
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"block":{"type":"object","properties":{"reason":{"type":"string"},"created_at":{"type":"string"},"html_url":{"type":["string","null"]}}},"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Get\\Response\\Application\\Json\\H403';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H403\Block::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H403\Block $block;
    private string $message;
    private string $documentation_url;
    public function block() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H403\Block
    {
        return $this->block;
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
