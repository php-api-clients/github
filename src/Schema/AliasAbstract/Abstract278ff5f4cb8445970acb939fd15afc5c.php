<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract278ff5f4cb8445970acb939fd15afc5c
{
    public const SCHEMA_JSON         = '{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}},"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}},"severity":{"type":"string"},"vulnerable_version_range":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"first_patched_version":{"identifier":"generated_identifier_null"},"package":{"ecosystem":"generated_ecosystem_null","name":"generated_name_null"},"severity":"generated_severity_null","vulnerable_version_range":"generated_vulnerable_version_range_null"}';

    public function __construct(#[MapFrom('first_patched_version')] public ?Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Vulnerabilities\FirstPatchedVersion $firstPatchedVersion, public Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Vulnerabilities\Package $package, public string $severity, #[MapFrom('vulnerable_version_range')] public string $vulnerableVersionRange)
    {
    }
}
