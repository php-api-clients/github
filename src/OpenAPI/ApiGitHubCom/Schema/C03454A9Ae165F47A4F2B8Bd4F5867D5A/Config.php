<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C03454A9Ae165F47A4F2B8Bd4F5867D5A;

final class Config
{
    public const SCHEMA_JSON = '{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]}},"description":"Key\\/value pairs to provide settings for this webhook. [These are defined below](https:\\/\\/docs.github.com\\/rest\\/reference\\/orgs#update-hook-config-params)."}';
    public const SCHEMA_TITLE = 'C03454A9Ae165F47A4F2B8Bd4F5867D5A\\Config';
    public const SCHEMA_DESCRIPTION = 'Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/rest/reference/orgs#update-hook-config-params).';
    /**
     * The URL to which the payloads will be delivered.
     */
    private string $url;
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     */
    private ?string $content_type = null;
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/webhooks/event-payloads/#delivery-headers).
     */
    private ?string $secret = null;
    private $insecure_ssl;
    /**
     * The URL to which the payloads will be delivered.
     */
    public function url() : string
    {
        return $this->url;
    }
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     */
    public function content_type() : ?string
    {
        return $this->content_type;
    }
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/webhooks/event-payloads/#delivery-headers).
     */
    public function secret() : ?string
    {
        return $this->secret;
    }
    public function insecure_ssl()
    {
        return $this->insecure_ssl;
    }
}
