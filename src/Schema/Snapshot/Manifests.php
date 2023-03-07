<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Snapshot;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Manifests
{
    public const SCHEMA_JSON = '{"type":"object","description":"A collection of package manifests, which are a collection of related dependencies declared in a file or representing a logical group of dependencies.","additionalProperties":{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the manifest.","examples":["package-lock.json"]},"file":{"type":"object","properties":{"source_location":{"type":"string","description":"The path of the manifest file relative to the root of the Git repository.","examples":["\\/src\\/build\\/package-lock.json"]}},"additionalProperties":false},"metadata":{"title":"metadata","maxProperties":8,"type":"object","description":"User-defined metadata to store domain-specific information limited to 8 keys with scalar values.","additionalProperties":{"type":["null","string","number","boolean"],"anyOf":[{"type":"string"},{"type":"number"},{"type":"boolean"}]}},"resolved":{"type":"object","description":"A collection of resolved package dependencies.","additionalProperties":{"type":"object","properties":{"package_url":{"pattern":"^pkg","type":"string","description":"Package-url (PURL) of dependency. See https:\\/\\/github.com\\/package-url\\/purl-spec for more details.","examples":["pkg:\\/npm\\/%40actions\\/http-client@1.0.11"]},"metadata":{"title":"metadata","maxProperties":8,"type":"object","description":"User-defined metadata to store domain-specific information limited to 8 keys with scalar values.","additionalProperties":{"type":["null","string","number","boolean"],"anyOf":[{"type":"string"},{"type":"number"},{"type":"boolean"}]}},"relationship":{"enum":["direct","indirect"],"type":"string","description":"A notation of whether a dependency is requested directly by this manifest or is a dependency of another dependency.","examples":["direct"]},"scope":{"enum":["runtime","development"],"type":"string","description":"A notation of whether the dependency is required for the primary build artifact (runtime) or is only used for development. Future versions of this specification may allow for more granular scopes.","examples":["runtime"]},"dependencies":{"type":"array","items":{"type":"string"},"description":"Array of package-url (PURLs) of direct child dependencies.","examples":["@actions\\/http-client"]}},"additionalProperties":false}}},"additionalProperties":false}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'A collection of package manifests, which are a collection of related dependencies declared in a file or representing a logical group of dependencies.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
