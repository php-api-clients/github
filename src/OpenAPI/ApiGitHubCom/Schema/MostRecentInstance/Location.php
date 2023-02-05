<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance;

final class Location
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'MostRecentInstance\\Location';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $end_column;
    public readonly int $end_line;
    public readonly string $path;
    public readonly int $start_column;
    public readonly int $start_line;
    public function __construct(int $end_column, int $end_line, string $path, int $start_column, int $start_line)
    {
        $this->end_column = $end_column;
        $this->end_line = $end_line;
        $this->path = $path;
        $this->start_column = $start_column;
        $this->start_line = $start_line;
    }
}
