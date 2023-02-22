<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCodeScanningAlertAppearedInBranch\Alert\MostRecentInstance;

final readonly class Location
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"end_column":{"type":"integer"},"end_line":{"type":"integer"},"path":{"type":"string"},"start_column":{"type":"integer"},"start_line":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $end_column;
    public ?int $end_line;
    public ?string $path;
    public ?int $start_column;
    public ?int $start_line;
    public function __construct(int $end_column, int $end_line, string $path, int $start_column, int $start_line)
    {
        $this->end_column = $end_column;
        $this->end_line = $end_line;
        $this->path = $path;
        $this->start_column = $start_column;
        $this->start_line = $start_line;
    }
}
