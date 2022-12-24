<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CD2A759130388E4E1Cc684Aa946754F39
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"enable_debug_logging":{"type":"boolean","description":"Whether to enable debug logging for the re-run.","default":false}}}';
    public const SCHEMA_TITLE = 'c_d2a759130388e4e1cc684aa946754f39';
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
