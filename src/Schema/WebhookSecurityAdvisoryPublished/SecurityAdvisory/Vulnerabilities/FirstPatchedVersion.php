<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Vulnerabilities;

final readonly class FirstPatchedVersion
{
    public const SCHEMA_JSON         = '{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"identifier":"generated"}';

    public function __construct(public string $identifier)
    {
    }
}
