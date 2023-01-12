<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class DependencyGraphDiff
{
    public const SCHEMA_JSON = '{"title":"Dependency Graph Diff","type":"array","items":{"required":["change_type","manifest","ecosystem","name","version","package_url","license","source_repository_url","vulnerabilities","scope"],"type":"object","properties":{"change_type":{"enum":["added","removed"],"type":"string"},"manifest":{"type":"string","examples":["path\\/to\\/package-lock.json"]},"ecosystem":{"type":"string","examples":["npm"]},"name":{"type":"string","examples":["@actions\\/core"]},"version":{"type":"string","examples":["1.0.0"]},"package_url":{"type":["string","null"],"examples":["pkg:\\/npm\\/%40actions\\/core@1.1.0"]},"license":{"type":["string","null"],"examples":["MIT"]},"source_repository_url":{"type":["string","null"],"examples":["https:\\/\\/github.com\\/github\\/actions"]},"vulnerabilities":{"type":"array","items":{"required":["severity","advisory_ghsa_id","advisory_summary","advisory_url"],"type":"object","properties":{"severity":{"type":"string","examples":["critical"]},"advisory_ghsa_id":{"type":"string","examples":["GHSA-rf4j-j272-fj86"]},"advisory_summary":{"type":"string","examples":["A summary of the advisory."]},"advisory_url":{"type":"string","examples":["https:\\/\\/github.com\\/advisories\\/GHSA-rf4j-j272-fj86"]}}}},"scope":{"enum":["unknown","runtime","development"],"type":"string","description":"Where the dependency is utilized. `development` means that the dependency is only utilized in the development environment. `runtime` means that the dependency is utilized at runtime and in the development environment."}}},"description":"A diff of the dependencies between two commits."}';
    public const SCHEMA_TITLE = 'dependency-graph-diff';
    public const SCHEMA_DESCRIPTION = '';
    private string $change_type;
    private string $manifest;
    private string $ecosystem;
    private string $name;
    private string $version;
    private ?string $package_url;
    private ?string $license;
    private ?string $source_repository_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff\Vulnerabilities>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff\Vulnerabilities::class)
     */
    private array $vulnerabilities = array();
    /**
     * Where the dependency is utilized. `development` means that the dependency is only utilized in the development environment. `runtime` means that the dependency is utilized at runtime and in the development environment.
     */
    private string $scope;
    public function change_type() : string
    {
        return $this->change_type;
    }
    public function manifest() : string
    {
        return $this->manifest;
    }
    public function ecosystem() : string
    {
        return $this->ecosystem;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function version() : string
    {
        return $this->version;
    }
    public function package_url() : ?string
    {
        return $this->package_url;
    }
    public function license() : ?string
    {
        return $this->license;
    }
    public function source_repository_url() : ?string
    {
        return $this->source_repository_url;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff\Vulnerabilities>
     */
    public function vulnerabilities() : array
    {
        return $this->vulnerabilities;
    }
    /**
     * Where the dependency is utilized. `development` means that the dependency is only utilized in the development environment. `runtime` means that the dependency is utilized at runtime and in the development environment.
     */
    public function scope() : string
    {
        return $this->scope;
    }
}
