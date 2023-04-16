<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookLabelEdited\Changes;

final readonly class Color
{
    public const SCHEMA_JSON         = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the color if the action was `edited`."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from_null"}';

    /**
     * from: The previous version of the color if the action was `edited`.
     */
    public function __construct(public string $from)
    {
    }
}
