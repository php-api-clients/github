<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion;

final class Metadata
{
    public const SCHEMA_JSON = '{"title":"Package Version Metadata","required":["package_type"],"type":"object","properties":{"package_type":{"enum":["npm","maven","rubygems","docker","nuget","container"],"type":"string","examples":["docker"]},"container":{"title":"Container Metadata","required":["tags"],"type":"object","properties":{"tags":{"type":"array","items":{"type":"string"}}}},"docker":{"title":"Docker Metadata","required":["tags"],"type":"object","properties":{"tag":{"type":"array","items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = 'Package Version Metadata';
    public const SCHEMA_DESCRIPTION = '';
    private string $package_type;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata\Container::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata\Container $container = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata\Docker::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata\Docker $docker = null;
    public function package_type() : string
    {
        return $this->package_type;
    }
    public function container() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata\Container
    {
        return $this->container;
    }
    public function docker() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata\Docker
    {
        return $this->docker;
    }
}
