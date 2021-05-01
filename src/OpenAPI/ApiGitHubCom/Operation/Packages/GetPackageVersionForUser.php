<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

final class GetPackageVersionForUser
{
    private const OPERATION_ID = 'packages/get-package-version-for-user';
    /**The type of supported package. Can be one of `npm`, `maven`, `rubygems`, `nuget`, `docker`, or `container`. For Docker images that use the package namespace `https://ghcr.io/owner/package-name`, use `container`.**/
    public string $package_type;
    /**The name of the package.**/
    public string $package_name;
    /**Unique identifier of the package version.**/
    public int $package_version_id;
    /****/
    public string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($package_type, $package_name, $package_version_id, $username)
    {
        $this->package_type = $package_type;
        $this->package_name = $package_name;
        $this->package_version_id = $package_version_id;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{package_type}', '{package_name}', '{package_version_id}', '{username}'), array($this->package_type, $this->package_name, $this->package_version_id, $this->username), '/users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}?'));
    }
    function validateResponse()
    {
    }
}