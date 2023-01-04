<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertWithRepository;

final class Dependency
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false},"manifest_path":{"type":"string","description":"The full path to the dependency manifest file, relative to the root of the repository.","readOnly":true},"scope":{"enum":["development","runtime",null],"type":["string","null"],"description":"The execution scope of the vulnerable dependency.","readOnly":true}},"description":"Details for the vulnerable dependency.","readOnly":true}';
    public const SCHEMA_TITLE = 'DependabotAlertWithRepository\\Dependency';
    public const SCHEMA_DESCRIPTION = 'Details for the vulnerable dependency.';
    /**
     * Details for the vulnerable package.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertPackage::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertPackage $package;
    /**
     * The full path to the dependency manifest file, relative to the root of the repository.
     */
    private string $manifest_path;
    /**
     * The execution scope of the vulnerable dependency.
     */
    private ?string $scope;
    /**
     * Details for the vulnerable package.
     */
    public function package() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertPackage
    {
        return $this->package;
    }
    /**
     * The full path to the dependency manifest file, relative to the root of the repository.
     */
    public function manifest_path() : string
    {
        return $this->manifest_path;
    }
    /**
     * The execution scope of the vulnerable dependency.
     */
    public function scope() : ?string
    {
        return $this->scope;
    }
}
