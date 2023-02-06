<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReRunJobForWorkflowRun\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"enable_debug_logging":{"type":"boolean","description":"Whether to enable debug logging for the re-run.","default":false}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'ReRunJobForWorkflowRun\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether to enable debug logging for the re-run.
     */
    public readonly bool $enable_debug_logging;
    public function __construct(bool $enable_debug_logging)
    {
        $this->enable_debug_logging = $enable_debug_logging;
    }
}
