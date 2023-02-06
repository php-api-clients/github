<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectCardEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"required":["note"],"type":"object","properties":{"note":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookProjectCardEdited\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Note $note;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Note $note)
    {
        $this->note = $note;
    }
}
