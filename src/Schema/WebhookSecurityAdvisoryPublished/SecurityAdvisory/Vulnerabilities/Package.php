<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Vulnerabilities;

final readonly class Package
{
    public const SCHEMA_JSON         = '{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ecosystem":"generated","name":"generated"}';

    public function __construct(public string $ecosystem, public string $name)
    {
    }
}
