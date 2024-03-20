<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryDispatchSample;

final readonly class ClientPayload
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "description": "The `client_payload` that was specified in the `POST \\/repos\\/{owner}\\/{repo}\\/dispatches` request body.",
    "additionalProperties": true
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The `client_payload` that was specified in the `POST /repos/{owner}/{repo}/dispatches` request body.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
