<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
abstract readonly class Abstract2bf61f22d40e495cd2dcd6b69d8d9b32
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false},"manifest_path":{"type":"string","description":"The full path to the dependency manifest file, relative to the root of the repository.","readOnly":true},"scope":{"enum":["development","runtime",null],"type":["string","null"],"description":"The execution scope of the vulnerable dependency.","readOnly":true}},"description":"Details for the vulnerable dependency.","readOnly":true}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Details for the vulnerable dependency.';
    public const SCHEMA_EXAMPLE_DATA = '{"package":{"ecosystem":"generated_ecosystem_null","name":"generated_name_null"},"manifest_path":"generated_manifest_path_null","scope":"development"}';
    /**
     * package: Details for the vulnerable package.
     * manifestPath: The full path to the dependency manifest file, relative to the root of the repository.
     * scope: The execution scope of the vulnerable dependency.
     */
    public function __construct(public ?Schema\DependabotAlertPackage $package, #[\EventSauce\ObjectHydrator\MapFrom('manifest_path')] public ?string $manifestPath, public ?string $scope)
    {
    }
}
