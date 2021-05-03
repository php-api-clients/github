<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WebhookConfigSecret
{
    public const SCHEMA_TITLE = 'webhook-config-secret';
    public const SPL_HASH = '00000000252f5b6c0000000029de5079';
    public const SCHEMA_DESCRIPTION = 'If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/webhooks/event-payloads/#delivery-headers).';
}
