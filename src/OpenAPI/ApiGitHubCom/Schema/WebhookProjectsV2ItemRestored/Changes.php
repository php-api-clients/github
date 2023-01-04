<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ItemRestored;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"archived_at":{"type":"object","properties":{"from":{"type":["string","null"],"format":"date-time"},"to":{"type":["string","null"],"format":"date-time"}}}}}';
    public const SCHEMA_TITLE = 'WebhookProjectsV2ItemRestored\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\ArchivedAt::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\ArchivedAt $archived_at;
    public function archived_at() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\ArchivedAt
    {
        return $this->archived_at;
    }
}
