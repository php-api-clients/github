<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

final class GetAllPackageVersionsForPackageOwnedByUser
{
    private const OPERATION_ID = 'packages/get-all-package-versions-for-package-owned-by-user';
    /**The type of supported package. Can be one of `npm`, `maven`, `rubygems`, `nuget`, `docker`, or `container`. For Docker images that use the package namespace `https://ghcr.io/owner/package-name`, use `container`.**/
    public string $package_type;
    /**The name of the package.**/
    public string $package_name;
    /****/
    public string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($package_type, $package_name, $username)
    {
        $this->package_type = $package_type;
        $this->package_name = $package_name;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{package_type}', '{package_name}', '{username}'), array($this->package_type, $this->package_name, $this->username), '/users/{username}/packages/{package_type}/{package_name}/versions?'));
    }
    function validateResponse()
    {
    }
}
