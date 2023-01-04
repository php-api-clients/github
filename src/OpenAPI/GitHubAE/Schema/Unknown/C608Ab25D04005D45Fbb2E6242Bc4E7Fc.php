<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C608Ab25D04005D45Fbb2E6242Bc4E7Fc
{
    public const SCHEMA_JSON = '{"required":["name","config"],"type":"object","properties":{"name":{"type":"string","description":"Must be passed as \\"web\\"."},"config":{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/github-ae@latest\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"username":{"type":"string","examples":["\\"kdaigle\\""]},"password":{"type":"string","examples":["\\"password\\""]}},"description":"Key\\/value pairs to provide settings for this webhook. [These are defined below](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/orgs#create-hook-config-params)."},"events":{"type":"array","items":{"type":"string"},"description":"Determines what [events](https:\\/\\/docs.github.com\\/github-ae@latest\\/webhooks\\/event-payloads) the hook is triggered for. Set to `[\\"*\\"]` to receive all possible events.","default":["push"]},"active":{"type":"boolean","description":"Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.","default":true}}}';
    public const SCHEMA_TITLE = 'c_608ab25d04005d45fbb2e6242bc4e7fc';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Must be passed as "web".
     */
    private string $name;
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/github-ae@latest/rest/reference/orgs#create-hook-config-params).
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C608Ab25D04005D45Fbb2E6242Bc4E7Fc\Config::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C608Ab25D04005D45Fbb2E6242Bc4E7Fc\Config $config;
    /**
     * Determines what [events](https://docs.github.com/github-ae@latest/webhooks/event-payloads) the hook is triggered for. Set to `["*"]` to receive all possible events.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C608Ab25D04005D45Fbb2E6242Bc4E7Fc\Events>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C608Ab25D04005D45Fbb2E6242Bc4E7Fc\Events::class)
     */
    private array $events = array();
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    private ?bool $active = null;
    /**
     * Must be passed as "web".
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/github-ae@latest/rest/reference/orgs#create-hook-config-params).
     */
    public function config() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C608Ab25D04005D45Fbb2E6242Bc4E7Fc\Config
    {
        return $this->config;
    }
    /**
     * Determines what [events](https://docs.github.com/github-ae@latest/webhooks/event-payloads) the hook is triggered for. Set to `["*"]` to receive all possible events.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\C608Ab25D04005D45Fbb2E6242Bc4E7Fc\Events>
     */
    public function events() : array
    {
        return $this->events;
    }
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    public function active() : ?bool
    {
        return $this->active;
    }
}
