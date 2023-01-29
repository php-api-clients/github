<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetRepoSubscription\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"subscribed":{"type":"boolean","description":"Determines if notifications should be received from this repository."},"ignored":{"type":"boolean","description":"Determines if all notifications should be blocked from this repository."}}}';
    public const SCHEMA_TITLE = 'SetRepoSubscription\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Determines if notifications should be received from this repository.
     */
    public readonly bool $subscribed;
    /**
     * Determines if all notifications should be blocked from this repository.
     */
    public readonly bool $ignored;
    public function __construct(bool $subscribed, bool $ignored)
    {
        $this->subscribed = $subscribed;
        $this->ignored = $ignored;
    }
}
