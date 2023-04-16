<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Dependency
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"package_url":{"pattern":"^pkg","type":"string","description":"Package-url (PURL) of dependency. See https:\\/\\/github.com\\/package-url\\/purl-spec for more details.","examples":["pkg:\\/npm\\/%40actions\\/http-client@1.0.11"]},"metadata":{"title":"metadata","maxProperties":8,"type":"object","description":"User-defined metadata to store domain-specific information limited to 8 keys with scalar values.","additionalProperties":{"type":["null","string","number","boolean"],"anyOf":[{"type":"string"},{"type":"number"},{"type":"boolean"}]}},"relationship":{"enum":["direct","indirect"],"type":"string","description":"A notation of whether a dependency is requested directly by this manifest or is a dependency of another dependency.","examples":["direct"]},"scope":{"enum":["runtime","development"],"type":"string","description":"A notation of whether the dependency is required for the primary build artifact (runtime) or is only used for development. Future versions of this specification may allow for more granular scopes.","examples":["runtime"]},"dependencies":{"type":"array","items":{"type":"string"},"description":"Array of package-url (PURLs) of direct child dependencies.","examples":["@actions\\/http-client"]}},"additionalProperties":false}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"package_url":"pkg:\\/npm\\/%40actions\\/http-client@1.0.11","metadata":null,"relationship":"direct","scope":"runtime","dependencies":["@actions\\/http-client"]}';

    /**
     * packageUrl: Package-url (PURL) of dependency. See https://github.com/package-url/purl-spec for more details.
     * metadata: User-defined metadata to store domain-specific information limited to 8 keys with scalar values.
     * relationship: A notation of whether a dependency is requested directly by this manifest or is a dependency of another dependency.
     * scope: A notation of whether the dependency is required for the primary build artifact (runtime) or is only used for development. Future versions of this specification may allow for more granular scopes.
     * dependencies: Array of package-url (PURLs) of direct child dependencies.
     *
     * @param ?array<string> $dependencies
     */
    public function __construct(#[MapFrom('package_url')] public ?string $packageUrl, public mixed $metadata, public ?string $relationship, public ?string $scope, public ?array $dependencies)
    {
    }
}
