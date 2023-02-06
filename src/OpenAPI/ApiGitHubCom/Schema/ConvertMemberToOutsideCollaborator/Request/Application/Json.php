<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ConvertMemberToOutsideCollaborator\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"async":{"type":"boolean","description":"When set to `true`, the request will be performed asynchronously. Returns a 202 status code when the job is successfully queued.","default":false}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'ConvertMemberToOutsideCollaborator\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * When set to `true`, the request will be performed asynchronously. Returns a 202 status code when the job is successfully queued.
     */
    public readonly bool $async;
    public function __construct(bool $async)
    {
        $this->async = $async;
    }
}
