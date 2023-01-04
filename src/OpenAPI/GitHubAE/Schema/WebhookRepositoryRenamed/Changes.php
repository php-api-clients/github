<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookRepositoryRenamed;

final class Changes
{
    public const SCHEMA_JSON = '{"required":["repository"],"type":"object","properties":{"repository":{"required":["name"],"type":"object","properties":{"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}}}';
    public const SCHEMA_TITLE = 'WebhookRepositoryRenamed\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Repository $repository;
    public function repository() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Repository
    {
        return $this->repository;
    }
}
