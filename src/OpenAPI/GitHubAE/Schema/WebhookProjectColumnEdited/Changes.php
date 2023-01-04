<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookProjectColumnEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'WebhookProjectColumnEdited\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Name::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Name $name;
    public function name() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Name
    {
        return $this->name;
    }
}
