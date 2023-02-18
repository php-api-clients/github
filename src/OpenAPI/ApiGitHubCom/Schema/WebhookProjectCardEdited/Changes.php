<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectCardEdited;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectCardEdited\Changes\Note;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"required":["note"],"type":"object","properties":{"note":{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Note $note;

    public function __construct(Note $note)
    {
        $this->note = $note;
    }
}
