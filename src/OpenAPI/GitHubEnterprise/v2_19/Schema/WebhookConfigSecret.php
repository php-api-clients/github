<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class WebhookConfigSecret
{
    public const SCHEMA_TITLE       = 'webhook-config-secret';
    public const SCHEMA_DESCRIPTION = 'If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/enterprise-server@2.19/webhooks/event-payloads/#delivery-headers).';
}
