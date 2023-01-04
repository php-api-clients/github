<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Billable;

final class Macos
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_ms":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Billable\\Macos';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_ms;
    public function total_ms() : int
    {
        return $this->total_ms;
    }
}
