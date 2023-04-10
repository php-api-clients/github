<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract9c524ce63113c78b187f1cbf4c51e340
{
    public const SCHEMA_JSON = '{"required":["package"],"type":"object","properties":{"package":{"required":["ecosystem"],"type":"object","properties":{"ecosystem":{"enum":["rubygems","npm","pip","maven","nuget","composer","go","rust","erlang","actions","pub","other"],"type":"string","description":"The package\'s language or package management ecosystem."},"name":{"type":["string","null"],"description":"The unique package name within its ecosystem."}},"description":"The name of the package affected by the vulnerability."},"vulnerable_version_range":{"type":["string","null"],"description":"The range of the package versions affected by the vulnerability."},"patched_versions":{"type":["string","null"],"description":"The package version(s) that resolve the vulnerability."},"vulnerable_functions":{"type":["array","null"],"items":{"type":"string"},"description":"The functions in the package that are affected."}},"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"package":{"ecosystem":"rubygems","name":"generated_name_null"},"vulnerable_version_range":"generated_vulnerable_version_range_null","patched_versions":"generated_patched_versions_null","vulnerable_functions":["generated_vulnerable_functions_null"]}';
    /**
     * package: The name of the package affected by the vulnerability.
     * vulnerableVersionRange: The range of the package versions affected by the vulnerability.
     * patchedVersions: The package version(s) that resolve the vulnerability.
     * vulnerableFunctions: The functions in the package that are affected.
     * @param ?array<string> $vulnerableFunctions
     */
    public function __construct(public Schema\RepositoryAdvisoryCreate\Vulnerabilities\Package $package, #[\EventSauce\ObjectHydrator\MapFrom('vulnerable_version_range')] public ?string $vulnerableVersionRange, #[\EventSauce\ObjectHydrator\MapFrom('patched_versions')] public ?string $patchedVersions, #[\EventSauce\ObjectHydrator\MapFrom('vulnerable_functions')] public ?array $vulnerableFunctions)
    {
    }
}
