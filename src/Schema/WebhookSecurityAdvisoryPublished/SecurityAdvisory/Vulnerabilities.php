<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Vulnerabilities
{
    public const SCHEMA_JSON = '{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}},"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}},"severity":{"type":"string"},"vulnerable_version_range":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"first_patched_version":{"identifier":"generated_identifier"},"package":{"ecosystem":"generated_ecosystem","name":"generated_name"},"severity":"generated_severity","vulnerable_version_range":"generated_vulnerable_version_range"}';
    public function __construct(public ?Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Vulnerabilities\FirstPatchedVersion $first_patched_version, public Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Vulnerabilities\Package $package, public string $severity, public string $vulnerable_version_range)
    {
    }
}
