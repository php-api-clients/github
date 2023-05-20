<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Vulnerabilities
{
    public const SCHEMA_JSON         = '{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}},"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}},"severity":{"type":"string"},"vulnerable_version_range":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"first_patched_version":{"identifier":"generated"},"package":{"ecosystem":"generated","name":"generated"},"severity":"generated","vulnerable_version_range":"generated"}';

    public function __construct(#[MapFrom('first_patched_version')] public ?Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Vulnerabilities\FirstPatchedVersion $firstPatchedVersion, public Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Vulnerabilities\Package $package, public string $severity, #[MapFrom('vulnerable_version_range')] public string $vulnerableVersionRange)
    {
    }
}
