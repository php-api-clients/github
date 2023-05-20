<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SecurityAndAnalysis;

final readonly class AdvancedSecurity
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"disabled"}';

    public function __construct(public ?string $status)
    {
    }
}
