<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class WebhooksDeployPusherType
{
    public const SCHEMA_JSON         = '{
    "type": "string",
    "description": "The pusher type for the event. Can be either `user` or a deploy key."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The pusher type for the event. Can be either `user` or a deploy key.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
