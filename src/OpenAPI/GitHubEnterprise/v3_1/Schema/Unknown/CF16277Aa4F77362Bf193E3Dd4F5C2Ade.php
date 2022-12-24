<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CF16277Aa4F77362Bf193E3Dd4F5C2Ade
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"email":{"type":"string","examples":["\\"foo@bar.com\\""]},"password":{"type":"string","examples":["\\"foo\\""]},"room":{"type":"string","examples":["\\"roomer\\""]},"subdomain":{"type":"string","examples":["\\"foo\\""]},"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"digest":{"type":"string","examples":["\\"sha256\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"token":{"type":"string","examples":["\\"abc\\""]}}}';
    public const SCHEMA_TITLE = 'c_f16277aa4f77362bf193e3dd4f5c2ade';
    public const SCHEMA_DESCRIPTION = '';
    private string $email;
    private string $password;
    private string $room;
    private string $subdomain;
    /**
     * The URL to which the payloads will be delivered.
     */
    private string $url;
    private $insecure_ssl;
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     */
    private string $content_type;
    private string $digest;
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/enterprise-server@3.1/webhooks/event-payloads/#delivery-headers).
     */
    private string $secret;
    private string $token;
    public function email() : string
    {
        return $this->email;
    }
    public function password() : string
    {
        return $this->password;
    }
    public function room() : string
    {
        return $this->room;
    }
    public function subdomain() : string
    {
        return $this->subdomain;
    }
    /**
     * The URL to which the payloads will be delivered.
     */
    public function url() : string
    {
        return $this->url;
    }
    public function insecure_ssl()
    {
        return $this->insecure_ssl;
    }
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     */
    public function content_type() : string
    {
        return $this->content_type;
    }
    public function digest() : string
    {
        return $this->digest;
    }
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/enterprise-server@3.1/webhooks/event-payloads/#delivery-headers).
     */
    public function secret() : string
    {
        return $this->secret;
    }
    public function token() : string
    {
        return $this->token;
    }
}
