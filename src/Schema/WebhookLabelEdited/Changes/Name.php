<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookLabelEdited\Changes;

final readonly class Name
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The previous version of the name if the action was `edited`.
     */
    public ?string $from;
    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
