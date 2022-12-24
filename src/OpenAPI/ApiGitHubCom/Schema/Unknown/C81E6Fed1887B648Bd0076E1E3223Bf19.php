<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C81E6Fed1887B648Bd0076E1E3223Bf19
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"async":{"type":"boolean","description":"When set to `true`, the request will be performed asynchronously. Returns a 202 status code when the job is successfully queued.","default":false}}}';
    public const SCHEMA_TITLE = 'c_81e6fed1887b648bd0076e1e3223bf19';
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
