<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WebhookConfigSecret
{
    public const SCHEMA_TITLE       = 'webhook-config-secret';
    public const SCHEMA_DESCRIPTION = 'If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/github-ae@latest/webhooks/event-payloads/#delivery-headers).';
}
