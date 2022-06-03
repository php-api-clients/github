<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

final class GetPackageForOrganization_
{
    private const OPERATION_ID = 'packages/get-package-for-organization';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry.**/
    public string $package_type;
    /**The name of the package.**/
    public string $package_name;
    /**The organization name. The name is not case sensitive.**/
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
