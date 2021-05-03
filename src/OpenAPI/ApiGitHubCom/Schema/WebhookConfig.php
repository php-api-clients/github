<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WebhookConfig
{
    public const SCHEMA_TITLE = 'Webhook Configuration';
    public const SPL_HASH = '00000000084e0e680000000020f58f84';
    public const SCHEMA_DESCRIPTION = 'Configuration object of the webhook';
    /**
     * The URL to which the payloads will be delivered.
     */
    private ?string $url = null;
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     */
    private ?string $content_type = null;
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https://docs.github.com/webhooks/event-payloads/#delivery-headers).
     */
    private ?string $secret = null;
    private $insecure_ssl;
    public function url() : ?string
    {
        return $this->url;
    }
    public function content_type() : ?string
    {
        return $this->content_type;
    }
    public function secret() : ?string
    {
        return $this->secret;
    }
    public function insecure_ssl()
    {
        return $this->insecure_ssl;
    }
}
