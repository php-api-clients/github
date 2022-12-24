<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C5F0E57890D8735D644Ecc5997705B22A
{
    public const SCHEMA_JSON = '{"title":"Package Version Metadata","required":["package_type"],"type":"object","properties":{"package_type":{"enum":["npm","maven","rubygems","docker","nuget","container"],"type":"string","examples":["docker"]},"container":{"title":"Container Metadata","required":["tags"],"type":"object","properties":{"tags":{"type":"array","items":{"type":"string"}}}},"docker":{"title":"Docker Metadata","required":["tags"],"type":"object","properties":{"tag":{"type":"array","items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = 'Package Version Metadata';
    public const SCHEMA_DESCRIPTION = '';
    private string $package_type;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C87C811Ec05B9Ef5A5079F3593D5Bf57E::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C87C811Ec05B9Ef5A5079F3593D5Bf57E $container = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDbb305B9B61C9A0F672E475958Be1B2D::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDbb305B9B61C9A0F672E475958Be1B2D $docker = null;
    public function package_type() : string
    {
        return $this->package_type;
    }
    public function container() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C87C811Ec05B9Ef5A5079F3593D5Bf57E
    {
        return $this->container;
    }
    public function docker() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CDbb305B9B61C9A0F672E475958Be1B2D
    {
        return $this->docker;
    }
}
