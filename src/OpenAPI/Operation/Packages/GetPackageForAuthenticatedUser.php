<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Packages;

final class GetPackageForAuthenticatedUser
{
    private const OPERATION_ID = 'packages/get-package-for-authenticated-user';
    /**The type of supported package. Can be one of `npm`, `maven`, `rubygems`, `nuget`, `docker`, or `container`. For Docker images that use the package namespace `https://ghcr.io/owner/package-name`, use `container`.**/
    public string $package_type;
    /**The name of the package.**/
    public string $package_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($package_type, $package_name)
    {
        $this->package_type = $package_type;
        $this->package_name = $package_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{package_type}', '{package_name}'), array($this->package_type, $this->package_name), '/user/packages/{package_type}/{package_name}?'));
    }
    function validateResponse()
    {
    }
}
