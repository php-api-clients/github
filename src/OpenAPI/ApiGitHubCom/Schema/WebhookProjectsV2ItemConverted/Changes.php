<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ItemConverted;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"content_type":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'WebhookProjectsV2ItemConverted\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\ContentType::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\ContentType $content_type;
    public function content_type() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\ContentType
    {
        return $this->content_type;
    }
}
