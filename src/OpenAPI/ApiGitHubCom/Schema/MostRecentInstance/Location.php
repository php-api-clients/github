<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance;

final class Location
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'MostRecentInstance\\Location';
    public const SCHEMA_DESCRIPTION = '';
    private int $end_column;
    private int $end_line;
    private string $path;
    private int $start_column;
    private int $start_line;
    public function end_column() : int
    {
        return $this->end_column;
    }
    public function end_line() : int
    {
        return $this->end_line;
    }
    public function path() : string
    {
        return $this->path;
    }
    public function start_column() : int
    {
        return $this->start_column;
    }
    public function start_line() : int
    {
        return $this->start_line;
    }
}
