<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C872F50F75E091Ef26985Fcab42Ee69Fb
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"config":{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL to which the payloads will be delivered.","format":"uri","examples":["https:\\/\\/example.com\\/webhook"]},"content_type":{"type":"string","description":"The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.","examples":["\\"json\\""]},"secret":{"type":"string","description":"If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value for [delivery signature headers](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads\\/#delivery-headers).","examples":["\\"********\\""]},"insecure_ssl":{"oneOf":[{"type":"string","description":"Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**","examples":["\\"0\\""]},{"type":"number"}]},"address":{"type":"string","examples":["\\"bar@example.com\\""]},"room":{"type":"string","examples":["\\"The Serious Room\\""]}},"description":"Key\\/value pairs to provide settings for this webhook. [These are defined below](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos#create-hook-config-params)."},"events":{"type":"array","items":{"type":"string"},"description":"Determines what [events](https:\\/\\/docs.github.com\\/webhooks\\/event-payloads) the hook is triggered for. This replaces the entire array of events.","default":["push"]},"add_events":{"type":"array","items":{"type":"string"},"description":"Determines a list of events to be added to the list of events that the Hook triggers for."},"remove_events":{"type":"array","items":{"type":"string"},"description":"Determines a list of events to be removed from the list of events that the Hook triggers for."},"active":{"type":"boolean","description":"Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.","default":true}}}';
    public const SCHEMA_TITLE = 'c_872f50f75e091ef26985fcab42ee69fb';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/rest/reference/repos#create-hook-config-params).
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C872F50F75E091Ef26985Fcab42Ee69Fb\Config::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C872F50F75E091Ef26985Fcab42Ee69Fb\Config $config;
    /**
     * Determines what [events](https://docs.github.com/webhooks/event-payloads) the hook is triggered for. This replaces the entire array of events.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C872F50F75E091Ef26985Fcab42Ee69Fb\Events>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C872F50F75E091Ef26985Fcab42Ee69Fb\Events::class)
     */
    private array $events = array();
    /**
     * Determines a list of events to be added to the list of events that the Hook triggers for.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C872F50F75E091Ef26985Fcab42Ee69Fb\AddEvents>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C872F50F75E091Ef26985Fcab42Ee69Fb\AddEvents::class)
     */
    private array $add_events = array();
    /**
     * Determines a list of events to be removed from the list of events that the Hook triggers for.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C872F50F75E091Ef26985Fcab42Ee69Fb\RemoveEvents>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C872F50F75E091Ef26985Fcab42Ee69Fb\RemoveEvents::class)
     */
    private array $remove_events = array();
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    private bool $active;
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://docs.github.com/rest/reference/repos#create-hook-config-params).
     */
    public function config() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C872F50F75E091Ef26985Fcab42Ee69Fb\Config
    {
        return $this->config;
    }
    /**
     * Determines what [events](https://docs.github.com/webhooks/event-payloads) the hook is triggered for. This replaces the entire array of events.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C872F50F75E091Ef26985Fcab42Ee69Fb\Events>
     */
    public function events() : array
    {
        return $this->events;
    }
    /**
     * Determines a list of events to be added to the list of events that the Hook triggers for.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C872F50F75E091Ef26985Fcab42Ee69Fb\AddEvents>
     */
    public function add_events() : array
    {
        return $this->add_events;
    }
    /**
     * Determines a list of events to be removed from the list of events that the Hook triggers for.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C872F50F75E091Ef26985Fcab42Ee69Fb\RemoveEvents>
     */
    public function remove_events() : array
    {
        return $this->remove_events;
    }
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     */
    public function active() : bool
    {
        return $this->active;
    }
}
