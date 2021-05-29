<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAlertLocation
{
    public const SCHEMA_TITLE       = 'code-scanning-alert-location';
    public const SCHEMA_DESCRIPTION = 'Describe a region within a file for the alert.';
    private ?string $path           = null;
    private ?int $start_line        = null;
    private ?int $end_line          = null;
    private ?int $start_column      = null;
    private ?int $end_column        = null;

    public function path(): ?string
    {
        return $this->path;
    }

    public function start_line(): ?int
    {
        return $this->start_line;
    }

    public function end_line(): ?int
    {
        return $this->end_line;
    }

    public function start_column(): ?int
    {
        return $this->start_column;
    }

    public function end_column(): ?int
    {
        return $this->end_column;
    }
}
