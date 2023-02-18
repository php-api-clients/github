<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class CodeScanningAlertLocation
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"path":{"type":"string"},"start_line":{"type":"integer"},"end_line":{"type":"integer"},"start_column":{"type":"integer"},"end_column":{"type":"integer"}},"description":"Describe a region within a file for the alert."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Describe a region within a file for the alert.';
    public ?string $path;
    public ?int $start_line;
    public ?int $end_line;
    public ?int $start_column;
    public ?int $end_column;
    public function __construct(string $path, int $start_line, int $end_line, int $start_column, int $end_column)
    {
        $this->path = $path;
        $this->start_line = $start_line;
        $this->end_line = $end_line;
        $this->start_column = $start_column;
        $this->end_column = $end_column;
    }
}
