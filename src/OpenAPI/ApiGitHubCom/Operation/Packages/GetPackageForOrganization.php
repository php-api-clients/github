<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

final class GetPackageForOrganization
{
    private const OPERATION_ID = 'packages/get-package-for-organization';
    /**The type of supported package. Can be one of `npm`, `maven`, `rubygems`, `nuget`, `docker`, or `container`. For Docker images that use the package namespace `https://ghcr.io/owner/package-name`, use `container`.**/
    public string $package_type;
    /**The name of the package.**/
    public string $package_name;
    /****/
    public string $org;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($package_type, $package_name, $org)
    {
        $this->package_type = $package_type;
        $this->package_name = $package_name;
        $this->org = $org;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{package_type}', '{package_name}', '{org}'), array($this->package_type, $this->package_name, $this->org), '/orgs/{org}/packages/{package_type}/{package_name}?'));
    }
    function validateResponse()
    {
    }
}
