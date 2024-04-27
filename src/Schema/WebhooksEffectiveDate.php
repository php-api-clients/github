<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class WebhooksEffectiveDate
{
    public const SCHEMA_JSON         = '{
    "type": "string",
    "description": "The `pending_cancellation` and `pending_tier_change` event types will include the date the cancellation or tier change will take effect."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The `pending_cancellation` and `pending_tier_change` event types will include the date the cancellation or tier change will take effect.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
