<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class DependencyGraphDiff
{
    public const SCHEMA_JSON = '{"required":["change_type","manifest","ecosystem","name","version","package_url","license","source_repository_url","vulnerabilities","scope"],"type":"object","properties":{"change_type":{"enum":["added","removed"],"type":"string"},"manifest":{"type":"string","examples":["path\\/to\\/package-lock.json"]},"ecosystem":{"type":"string","examples":["npm"]},"name":{"type":"string","examples":["@actions\\/core"]},"version":{"type":"string","examples":["1.0.0"]},"package_url":{"type":["string","null"],"examples":["pkg:\\/npm\\/%40actions\\/core@1.1.0"]},"license":{"type":["string","null"],"examples":["MIT"]},"source_repository_url":{"type":["string","null"],"examples":["https:\\/\\/github.com\\/github\\/actions"]},"vulnerabilities":{"type":"array","items":{"required":["severity","advisory_ghsa_id","advisory_summary","advisory_url"],"type":"object","properties":{"severity":{"type":"string","examples":["critical"]},"advisory_ghsa_id":{"type":"string","examples":["GHSA-rf4j-j272-fj86"]},"advisory_summary":{"type":"string","examples":["A summary of the advisory."]},"advisory_url":{"type":"string","examples":["https:\\/\\/github.com\\/advisories\\/GHSA-rf4j-j272-fj86"]}}}},"scope":{"enum":["unknown","runtime","development"],"type":"string","description":"Where the dependency is utilized. `development` means that the dependency is only utilized in the development environment. `runtime` means that the dependency is utilized at runtime and in the development environment."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"change_type":"added","manifest":"path\\/to\\/package-lock.json","ecosystem":"npm","name":"@actions\\/core","version":"1.0.0","package_url":"pkg:\\/npm\\/%40actions\\/core@1.1.0","license":"MIT","source_repository_url":"https:\\/\\/github.com\\/github\\/actions","vulnerabilities":[{"severity":"critical","advisory_ghsa_id":"GHSA-rf4j-j272-fj86","advisory_summary":"A summary of the advisory.","advisory_url":"https:\\/\\/github.com\\/advisories\\/GHSA-rf4j-j272-fj86"}],"scope":"unknown"}';
    /**
     * @param array<\ApiClients\Client\Github\Schema\DependencyGraphDiff\Vulnerabilities> $vulnerabilities
     * scope: Where the dependency is utilized. `development` means that the dependency is only utilized in the development environment. `runtime` means that the dependency is utilized at runtime and in the development environment.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('change_type')] public string $changeType, public string $manifest, public string $ecosystem, public string $name, public string $version, #[\EventSauce\ObjectHydrator\MapFrom('package_url')] public ?string $packageUrl, public ?string $license, #[\EventSauce\ObjectHydrator\MapFrom('source_repository_url')] public ?string $sourceRepositoryUrl, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\DependencyGraphDiff\Vulnerabilities::class)] public array $vulnerabilities, public string $scope)
    {
    }
}
