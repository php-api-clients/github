<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\DependencyGraphSpdxSbom\Sbom;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Packages
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"SPDXID":{"type":"string","description":"A unique SPDX identifier for the package.","examples":["SPDXRef-Package"]},"name":{"type":"string","description":"The name of the package.","examples":["rubygems:github\\/github"]},"versionInfo":{"type":"string","description":"The version of the package. If the package does not have an exact version specified,\\na version range is given.","examples":["1.0.0"]},"downloadLocation":{"type":"string","description":"The location where the package can be downloaded,\\nor NOASSERTION if this has not been determined.","examples":["NOASSERTION"]},"filesAnalyzed":{"type":"boolean","description":"Whether the package\'s file content has been subjected to\\nanalysis during the creation of the SPDX document.","examples":[false]},"licenseConcluded":{"type":"string","description":"The license of the package as determined while creating the SPDX document.","examples":["MIT"]},"licenseDeclared":{"type":"string","description":"The license of the package as declared by its author, or NOASSERTION if this information\\nwas not available when the SPDX document was created.","examples":["NOASSERTION"]},"supplier":{"type":"string","description":"The distribution source of this package, or NOASSERTION if this was not determined.","examples":["NOASSERTION"]},"externalRefs":{"type":"array","items":{"required":["referenceCategory","referenceLocator","referenceType"],"type":"object","properties":{"referenceCategory":{"type":"string","description":"The category of reference to an external resource this reference refers to.","examples":["PACKAGE-MANAGER"]},"referenceLocator":{"type":"string","description":"A locator for the particular external resource this reference refers to.","examples":["pkg:gem\\/rails@6.0.1"]},"referenceType":{"type":"string","description":"The category of reference to an external resource this reference refers to.","examples":["purl"]}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"SPDXID":"SPDXRef-Package","name":"rubygems:github\\/github","versionInfo":"1.0.0","downloadLocation":"NOASSERTION","filesAnalyzed":false,"licenseConcluded":"MIT","licenseDeclared":"NOASSERTION","supplier":"NOASSERTION","externalRefs":[{"referenceCategory":"PACKAGE-MANAGER","referenceLocator":"pkg:gem\\/rails@6.0.1","referenceType":"purl"}]}';
    /**
    * spdxid: A unique SPDX identifier for the package.
    * name: The name of the package.
    * versionInfo: The version of the package. If the package does not have an exact version specified,
    a version range is given.
    * downloadLocation: The location where the package can be downloaded,
    or NOASSERTION if this has not been determined.
    * filesAnalyzed: Whether the package's file content has been subjected to
    analysis during the creation of the SPDX document.
    * licenseConcluded: The license of the package as determined while creating the SPDX document.
    * licenseDeclared: The license of the package as declared by its author, or NOASSERTION if this information
    was not available when the SPDX document was created.
    * supplier: The distribution source of this package, or NOASSERTION if this was not determined.
    * @param ?array<\ApiClients\Client\Github\Schema\DependencyGraphSpdxSbom\Sbom\Packages\ExternalRefs> $externalRefs
    */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('SPDXID')] public ?string $spdxid, public ?string $name, public ?string $versionInfo, public ?string $downloadLocation, public ?bool $filesAnalyzed, public ?string $licenseConcluded, public ?string $licenseDeclared, public ?string $supplier, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\DependencyGraphSpdxSbom\Sbom\Packages\ExternalRefs::class)] public ?array $externalRefs)
    {
    }
}
