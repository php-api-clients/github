<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookProjectCardConverted;

final class Changes
{
    public const SCHEMA_JSON = '{"required":["note"],"type":"object","properties":{"note":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'WebhookProjectCardConverted\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Note::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Note $note;
    public function note() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Note
    {
        return $this->note;
    }
}
