<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningAlertLocation
{
    public const SCHEMA_TITLE = 'code-scanning-alert-location';
    public const SPL_HASH = '000000007ee6e8530000000021479ea3';
    public const SCHEMA_DESCRIPTION = 'Describe a region within a file for the alert.';
    private string $path;
    private int $start_line;
    private int $end_line;
    private int $start_column;
    private int $end_column;
    public function path() : string
    {
        return $this->path;
    }
    public function start_line() : int
    {
        return $this->start_line;
    }
    public function end_line() : int
    {
        return $this->end_line;
    }
    public function start_column() : int
    {
        return $this->start_column;
    }
    public function end_column() : int
    {
        return $this->end_column;
    }
}
