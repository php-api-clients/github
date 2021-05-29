<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WebhookConfigContentType
{
    public const SCHEMA_TITLE       = 'webhook-config-content-type';
    public const SCHEMA_DESCRIPTION = 'The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.';
}
