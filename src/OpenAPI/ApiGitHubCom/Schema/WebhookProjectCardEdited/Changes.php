<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectCardEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"required":["note"],"type":"object","properties":{"note":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = 'WebhookProjectCardEdited\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Note::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Note $note;
    public function note() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Note
    {
        return $this->note;
    }
}
