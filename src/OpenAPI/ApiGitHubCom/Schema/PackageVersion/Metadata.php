<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion;

final readonly class Metadata
{
    public const SCHEMA_JSON = '{"title":"Package Version Metadata","required":["package_type"],"type":"object","properties":{"package_type":{"enum":["npm","maven","rubygems","docker","nuget","container"],"type":"string","examples":["docker"]},"container":{"title":"Container Metadata","required":["tags"],"type":"object","properties":{"tags":{"type":"array","items":{"type":"string"}}}},"docker":{"title":"Docker Metadata","required":["tags"],"type":"object","properties":{"tag":{"type":"array","items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = 'Package Version Metadata';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $package_type;
    public \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Metadata\Container $container;
    public \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Metadata\Docker $docker;
    public function __construct(string $package_type, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Metadata\Container $container, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Metadata\Docker $docker)
    {
        $this->package_type = $package_type;
        $this->container = $container;
        $this->docker = $docker;
    }
}
