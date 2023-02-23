<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\UpdateWebhookConfigForRepo\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]}},"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The URL to which the payloads will be delivered.
     */
    public ?string $url;
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     */
    public ?string $content_type;
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/webhooks/event-payloads/#delivery-headers).
     */
    public ?string $secret;
    public mixed $insecure_ssl;
    public function __construct(string $url, string $content_type, string $secret, mixed $insecure_ssl)
    {
        $this->url = $url;
        $this->content_type = $content_type;
        $this->secret = $secret;
        $this->insecure_ssl = $insecure_ssl;
    }
}
