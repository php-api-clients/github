<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ConvertMemberToOutsideCollaborator;

final class Request
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"async":{"type":"boolean","description":"When set to `true`, the request will be performed asynchronously. Returns a 202 status code when the job is successfully queued.","default":false}}}';
    public const SCHEMA_TITLE = 'ConvertMemberToOutsideCollaborator\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * When set to `true`, the request will be performed asynchronously. Returns a 202 status code when the job is successfully queued.
     */
    private bool $async;
    /**
     * When set to `true`, the request will be performed asynchronously. Returns a 202 status code when the job is successfully queued.
     */
    public function async() : bool
    {
        return $this->async;
    }
}
