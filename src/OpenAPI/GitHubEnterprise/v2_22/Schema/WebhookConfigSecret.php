<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class WebhookConfigSecret
{
    public const SCHEMA_TITLE = 'webhook-config-secret';
    public const SPL_HASH = '000000000b4c034d0000000005634a32';
    public const SCHEMA_DESCRIPTION = 'If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/enterprise-server@2.22/webhooks/event-payloads/#delivery-headers).';
}
