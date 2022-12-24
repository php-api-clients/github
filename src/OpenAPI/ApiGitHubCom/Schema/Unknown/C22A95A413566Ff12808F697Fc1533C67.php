<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C22A95A413566Ff12808F697Fc1533C67
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string","description":"Use `web` to create a webhook. Default: `web`. This parameter only accepts the value `web`."},"config":{"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"token":{"type":"string","examples":["\\"abc\\""]},"digest":{"type":"string","examples":["\\"sha256\\""]}},"description":"Key\\/value pairs to provide settings for this webhook. [These are defined below](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos#create-hook-config-params)."},"events":{"type":"array","items":{"type":"string"},"description":"Determines what [events](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads) the hook is triggered for.","default":["push"]},"active":{"type":"boolean","description":"Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.","default":true}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'c_22a95a413566ff12808f697fc1533c67';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Use `web` to create a webhook. Default: `web`. This parameter only accepts the value `web`.
     */
    private string $name;
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/rest/reference/repos#create-hook-config-params).
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C33E322B059Fafa85E7D4Bb99E2F0314A::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C33E322B059Fafa85E7D4Bb99E2F0314A $config;
    /**
     * Determines what [events](https://docs.github.com/webhooks/event-payloads) the hook is triggered for.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $events = array();
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    private bool $active;
    /**
     * Use `web` to create a webhook. Default: `web`. This parameter only accepts the value `web`.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/rest/reference/repos#create-hook-config-params).
     */
    public function config() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C33E322B059Fafa85E7D4Bb99E2F0314A
    {
        return $this->config;
    }
    /**
     * Determines what [events](https://docs.github.com/webhooks/event-payloads) the hook is triggered for.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function events() : array
    {
        return $this->events;
    }
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    public function active() : bool
    {
        return $this->active;
    }
}
