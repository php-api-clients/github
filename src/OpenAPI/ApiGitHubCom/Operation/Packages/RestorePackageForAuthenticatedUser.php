<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

final class RestorePackageForAuthenticatedUser
{
    private const OPERATION_ID = 'packages/restore-package-for-authenticated-user';
    /**The type of supported package. Can be one of `npm`, `maven`, `rubygems`, `nuget`, `docker`, or `container`. For Docker images that use the package namespace `https://ghcr.io/owner/package-name`, use `container`.**/
    public string $package_type;
    /**The name of the package.**/
    public string $package_name;
    /**package token**/
    public string $token;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($package_type, $package_name, $token)
    {
        $this->package_type = $package_type;
        $this->package_name = $package_name;
        $this->token = $token;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{package_type}', '{package_name}', '{token}'), array($this->package_type, $this->package_name, $this->token), '/user/packages/{package_type}/{package_name}/restore?token={token}'));
    }
    function validateResponse()
    {
    }
}