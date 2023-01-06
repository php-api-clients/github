<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetThreadSubscription;

final class Request
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"ignored":{"type":"boolean","description":"Whether to block all notifications from a thread.","default":false}}}';
    public const SCHEMA_TITLE = 'SetThreadSubscription\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether to block all notifications from a thread.
     */
    private bool $ignored;
    /**
     * Whether to block all notifications from a thread.
     */
    public function ignored() : bool
    {
        return $this->ignored;
    }
}
