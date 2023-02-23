<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\SecurityAndAnalysis;

final readonly class AdvancedSecurity
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $status;
    public function __construct(string $status)
    {
        $this->status = $status;
    }
}
