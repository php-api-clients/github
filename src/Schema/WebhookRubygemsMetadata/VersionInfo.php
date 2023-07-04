<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRubygemsMetadata;

final readonly class VersionInfo
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"version":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"version":"generated"}';

    public function __construct(public string|null $version)
    {
    }
}
