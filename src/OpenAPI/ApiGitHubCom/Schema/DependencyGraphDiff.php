<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class DependencyGraphDiff
{
    public const SCHEMA_JSON = '{"required":["change_type","manifest","ecosystem","name","version","package_url","license","source_repository_url","vulnerabilities","scope"],"type":"object","properties":{"change_type":{"enum":["added","removed"],"type":"string"},"manifest":{"type":"string","examples":["path\\/to\\/package-lock.json"]},"ecosystem":{"type":"string","examples":["npm"]},"name":{"type":"string","examples":["@actions\\/core"]},"version":{"type":"string","examples":["1.0.0"]},"package_url":{"type":["string","null"],"examples":["pkg:\\/npm\\/%40actions\\/core@1.1.0"]},"license":{"type":["string","null"],"examples":["MIT"]},"source_repository_url":{"type":["string","null"],"examples":["https:\\/\\/github.com\\/github\\/actions"]},"vulnerabilities":{"type":"array","items":{"required":["severity","advisory_ghsa_id","advisory_summary","advisory_url"],"type":"object","properties":{"severity":{"type":"string","examples":["critical"]},"advisory_ghsa_id":{"type":"string","examples":["GHSA-rf4j-j272-fj86"]},"advisory_summary":{"type":"string","examples":["A summary of the advisory."]},"advisory_url":{"type":"string","examples":["https:\\/\\/github.com\\/advisories\\/GHSA-rf4j-j272-fj86"]}}}},"scope":{"enum":["unknown","runtime","development"],"type":"string","description":"Where the dependency is utilized. `development` means that the dependency is only utilized in the development environment. `runtime` means that the dependency is utilized at runtime and in the development environment."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $change_type;
    public ?string $manifest;
    public ?string $ecosystem;
    public ?string $name;
    public ?string $version;
    public ?string $package_url;
    public ?string $license;
    public ?string $source_repository_url;
    public ?array $vulnerabilities;
    /**
     * Where the dependency is utilized. `development` means that the dependency is only utilized in the development environment. `runtime` means that the dependency is utilized at runtime and in the development environment.
     */
    public ?string $scope;
    public function __construct(string $change_type, string $manifest, string $ecosystem, string $name, string $version, string $package_url, string $license, string $source_repository_url, array $vulnerabilities, string $scope)
    {
        $this->change_type = $change_type;
        $this->manifest = $manifest;
        $this->ecosystem = $ecosystem;
        $this->name = $name;
        $this->version = $version;
        $this->package_url = $package_url;
        $this->license = $license;
        $this->source_repository_url = $source_repository_url;
        $this->vulnerabilities = $vulnerabilities;
        $this->scope = $scope;
    }
}
