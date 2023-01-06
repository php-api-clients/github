<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReRunWorkflowFailedJobs;

final class Request
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"enable_debug_logging":{"type":"boolean","description":"Whether to enable debug logging for the re-run.","default":false}}}';
    public const SCHEMA_TITLE = 'ReRunWorkflowFailedJobs\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether to enable debug logging for the re-run.
     */
    private bool $enable_debug_logging;
    /**
     * Whether to enable debug logging for the re-run.
     */
    public function enable_debug_logging() : bool
    {
        return $this->enable_debug_logging;
    }
}
