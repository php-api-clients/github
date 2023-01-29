<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetThreadSubscription\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"ignored":{"type":"boolean","description":"Whether to block all notifications from a thread.","default":false}}}';
    public const SCHEMA_TITLE = 'SetThreadSubscription\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether to block all notifications from a thread.
     */
    public readonly bool $ignored;
    public function __construct(bool $ignored)
    {
        $this->ignored = $ignored;
    }
}
