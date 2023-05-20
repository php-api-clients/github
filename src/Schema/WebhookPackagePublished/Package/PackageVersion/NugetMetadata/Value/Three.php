<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata\Value;

final readonly class Three
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated","branch":"generated","commit":"generated","type":"generated"}';

    public function __construct(public ?string $url, public ?string $branch, public ?string $commit, public ?string $type)
    {
    }
}
