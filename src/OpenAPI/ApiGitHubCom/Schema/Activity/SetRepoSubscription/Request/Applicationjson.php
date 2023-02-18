<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Activity\SetRepoSubscription\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"subscribed":{"type":"boolean","description":"Determines if notifications should be received from this repository."},"ignored":{"type":"boolean","description":"Determines if all notifications should be blocked from this repository."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Determines if notifications should be received from this repository.
     */
    public ?bool $subscribed;
    /**
     * Determines if all notifications should be blocked from this repository.
     */
    public ?bool $ignored;
    public function __construct(bool $subscribed, bool $ignored)
    {
        $this->subscribed = $subscribed;
        $this->ignored = $ignored;
    }
}
