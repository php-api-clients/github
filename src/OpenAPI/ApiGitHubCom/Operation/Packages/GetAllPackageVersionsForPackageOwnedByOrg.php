<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

final class GetAllPackageVersionsForPackageOwnedByOrg
{
    private const OPERATION_ID = 'packages/get-all-package-versions-for-package-owned-by-org';
    /**The type of supported package. Can be one of `npm`, `maven`, `rubygems`, `nuget`, `docker`, or `container`. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry.**/
    public string $package_type;
    /**The name of the package.**/
    public string $package_name;
    /****/
    public string $org;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Results per page (max 100).**/
    public int $per_page;
    /**The state of the package, either active or deleted.**/
    public string $state;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($package_type, $package_name, $org, int $page = 1, int $per_page = 30, string $state = 'active')
    {
        $this->package_type = $package_type;
        $this->package_name = $package_name;
        $this->org = $org;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->state = $state;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{package_type}', '{package_name}', '{org}', '{page}', '{per_page}', '{state}'), array($this->package_type, $this->package_name, $this->org, $this->page, $this->per_page, $this->state), '/orgs/{org}/packages/{package_type}/{package_name}/versions?page={page}&per_page={per_page}&state={state}'));
    }
    function validateResponse()
    {
    }
}
