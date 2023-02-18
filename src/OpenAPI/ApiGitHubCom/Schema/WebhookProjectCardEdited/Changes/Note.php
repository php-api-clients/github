<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectCardEdited\Changes;

final readonly class Note
{
    public const SCHEMA_JSON        = '{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $from;

    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
