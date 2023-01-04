<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Manifest
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the manifest.","examples":["package-lock.json"]},"file":{"type":"object","properties":{"source_location":{"type":"string","description":"The path of the manifest file relative to the root of the Git repository.","examples":["\\/src\\/build\\/package-lock.json"]}},"additionalProperties":false},"metadata":{"title":"metadata","maxProperties":8,"type":"object","description":"User-defined metadata to store domain-specific information limited to 8 keys with scalar values.","additionalProperties":{"type":["null","string","number","boolean"],"anyOf":[{"type":"string"},{"type":"number"},{"type":"boolean"}]}},"resolved":{"type":"object","description":"A collection of resolved package dependencies.","additionalProperties":{"type":"object","properties":{"package_url":{"pattern":"^pkg","type":"string","description":"Package-url (PURL) of dependency. See https:\\/\\/github.com\\/package-url\\/purl-spec for more details.","examples":["pkg:\\/npm\\/%40actions\\/http-client@1.0.11"]},"metadata":{"title":"metadata","maxProperties":8,"type":"object","description":"User-defined metadata to store domain-specific information limited to 8 keys with scalar values.","additionalProperties":{"type":["null","string","number","boolean"],"anyOf":[{"type":"string"},{"type":"number"},{"type":"boolean"}]}},"relationship":{"enum":["direct","indirect"],"type":"string","description":"A notation of whether a dependency is requested directly by this manifest or is a dependency of another dependency.","examples":["direct"]},"scope":{"enum":["runtime","development"],"type":"string","description":"A notation of whether the dependency is required for the primary build artifact (runtime) or is only used for development. Future versions of this specification may allow for more granular scopes.","examples":["runtime"]},"dependencies":{"type":"array","items":{"type":"string"},"description":"Array of package-url (PURLs) of direct child dependencies.","examples":["@actions\\/http-client"]}},"additionalProperties":false}}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'manifest';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the manifest.
     */
    private string $name;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Manifest\File::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Manifest\File $file = null;
    /**
     * User-defined metadata to store domain-specific information limited to 8 keys with scalar values.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata $metadata = null;
    /**
     * A collection of resolved package dependencies.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Manifest\Resolved::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Manifest\Resolved $resolved = null;
    /**
     * The name of the manifest.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function file() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Manifest\File
    {
        return $this->file;
    }
    /**
     * User-defined metadata to store domain-specific information limited to 8 keys with scalar values.
     */
    public function metadata() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata
    {
        return $this->metadata;
    }
    /**
     * A collection of resolved package dependencies.
     */
    public function resolved() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Manifest\Resolved
    {
        return $this->resolved;
    }
}
