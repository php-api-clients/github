<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class WebhookConfigSecret
{
    public const SCHEMA_TITLE = 'webhook-config-secret';
    public const SPL_HASH = '0000000045a0ef950000000057b08344';
    public const SCHEMA_DESCRIPTION = 'If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/enterprise-server@2.21/webhooks/event-payloads/#delivery-headers).';
}
