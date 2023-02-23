<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class WebhookConfigSecret
{
    public const SCHEMA_JSON = '{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/webhooks/event-payloads/#delivery-headers).';
    public function __construct()
    {
    }
}
