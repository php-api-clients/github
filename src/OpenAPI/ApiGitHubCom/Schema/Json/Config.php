<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json;

final class Config
{
    public const SCHEMA_JSON = '{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"address":{"type":"string","examples":["\\"bar@example.com\\""]},"room":{"type":"string","examples":["\\"The Serious Room\\""]}},"description":"Key\\/value pairs to provide settings for this webhook. [These are defined below](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos#create-hook-config-params)."}';
    public const SCHEMA_EXAMPLE = '{"url":"https:\\/\\/example.com\\/webhook","content_type":"\\"json\\"","secret":"\\"********\\"","address":"\\"bar@example.com\\"","room":"\\"The Serious Room\\""}';
    public const SCHEMA_TITLE = 'Json\\Config';
    public const SCHEMA_DESCRIPTION = 'Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/rest/reference/repos#create-hook-config-params).';
    /**
     * The URL to which the payloads will be delivered.
     */
    public readonly string $url;
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     */
    public readonly ?string $content_type;
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/webhooks/event-payloads/#delivery-headers).
     */
    public readonly ?string $secret;
    public readonly mixed $insecure_ssl;
    public readonly ?string $address;
    public readonly ?string $room;
    public function __construct(string $url, string $content_type, string $secret, mixed $insecure_ssl, string $address, string $room)
    {
        $this->url = $url;
        $this->content_type = $content_type;
        $this->secret = $secret;
        $this->insecure_ssl = $insecure_ssl;
        $this->address = $address;
        $this->room = $room;
    }
}
