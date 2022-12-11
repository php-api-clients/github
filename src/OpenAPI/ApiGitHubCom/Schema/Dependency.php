<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Dependency
{
    public const SCHEMA_TITLE = 'dependency';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Package-url (PURL) of dependency. See https://github.com/package-url/purl-spec for more details.
     */
    private string $package_url;
    /**
     * User-defined metadata to store domain-specific information limited to 8 keys with scalar values.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata $metadata;
    /**
     * A notation of whether a dependency is requested directly by this manifest or is a dependency of another dependency.
     */
    private string $relationship;
    /**
     * A notation of whether the dependency is required for the primary build artifact (runtime) or is only used for development. Future versions of this specification may allow for more granular scopes.
     */
    private string $scope;
    /**
     * Array of package-url (PURLs) of direct child dependencies.
     */
    private array $dependencies = array();
    /**
     * Package-url (PURL) of dependency. See https://github.com/package-url/purl-spec for more details.
     */
    public function package_url() : string
    {
        return $this->package_url;
    }
    /**
     * User-defined metadata to store domain-specific information limited to 8 keys with scalar values.
     */
    public function metadata() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata
    {
        return $this->metadata;
    }
    /**
     * A notation of whether a dependency is requested directly by this manifest or is a dependency of another dependency.
     */
    public function relationship() : string
    {
        return $this->relationship;
    }
    /**
     * A notation of whether the dependency is required for the primary build artifact (runtime) or is only used for development. Future versions of this specification may allow for more granular scopes.
     */
    public function scope() : string
    {
        return $this->scope;
    }
    /**
     * Array of package-url (PURLs) of direct child dependencies.
     */
    public function dependencies() : array
    {
        return $this->dependencies;
    }
}
