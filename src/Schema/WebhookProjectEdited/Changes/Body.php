<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookProjectEdited\Changes;

final readonly class Body
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The previous version of the body if the action was `edited`.
     */
    public ?string $from;
    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
