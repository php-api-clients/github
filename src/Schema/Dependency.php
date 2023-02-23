<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class Dependency
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"package_url":{"pattern":"^pkg","type":"string","description":"Package-url (PURL) of dependency. See https:\\/\\/github.com\\/package-url\\/purl-spec for more details.","examples":["pkg:\\/npm\\/%40actions\\/http-client@1.0.11"]},"metadata":{"title":"metadata","maxProperties":8,"type":"object","description":"User-defined metadata to store domain-specific information limited to 8 keys with scalar values.","additionalProperties":{"type":["null","string","number","boolean"],"anyOf":[{"type":"string"},{"type":"number"},{"type":"boolean"}]}},"relationship":{"enum":["direct","indirect"],"type":"string","description":"A notation of whether a dependency is requested directly by this manifest or is a dependency of another dependency.","examples":["direct"]},"scope":{"enum":["runtime","development"],"type":"string","description":"A notation of whether the dependency is required for the primary build artifact (runtime) or is only used for development. Future versions of this specification may allow for more granular scopes.","examples":["runtime"]},"dependencies":{"type":"array","items":{"type":"string"},"description":"Array of package-url (PURLs) of direct child dependencies.","examples":["@actions\\/http-client"]}},"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Package-url (PURL) of dependency. See https://github.com/package-url/purl-spec for more details.
     */
    public ?string $package_url;
    /**
     * User-defined metadata to store domain-specific information limited to 8 keys with scalar values.
     */
    public ?\ApiClients\Client\Github\Schema\Metadata $metadata;
    /**
     * A notation of whether a dependency is requested directly by this manifest or is a dependency of another dependency.
     */
    public ?string $relationship;
    /**
     * A notation of whether the dependency is required for the primary build artifact (runtime) or is only used for development. Future versions of this specification may allow for more granular scopes.
     */
    public ?string $scope;
    /**
     * Array of package-url (PURLs) of direct child dependencies.
     */
    public ?array $dependencies;
    public function __construct(string $package_url, \ApiClients\Client\Github\Schema\Metadata $metadata, string $relationship, string $scope, array $dependencies)
    {
        $this->package_url = $package_url;
        $this->metadata = $metadata;
        $this->relationship = $relationship;
        $this->scope = $scope;
        $this->dependencies = $dependencies;
    }
}
