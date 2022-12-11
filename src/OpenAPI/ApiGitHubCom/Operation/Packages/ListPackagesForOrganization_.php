<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

final class ListPackagesForOrganization_
{
    private const OPERATION_ID = 'packages/list-packages-for-organization';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry.**/
    private readonly string $package_type;
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The selected visibility of the packages.  This parameter is optional and only filters an existing result set.
    
    The `internal` visibility is only supported for GitHub Packages registries that allow for granular permissions. For other ecosystems `internal` is synonymous with `private`.
    For the list of GitHub Packages registries that support granular permissions, see "[About permissions for GitHub Packages](https://docs.github.com/packages/learn-github-packages/about-permissions-for-github-packages#granular-permissions-for-userorganization-scoped-packages)."**/
    private readonly string $visibility;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $package_type, string $org, string $visibility)
    {
        $this->package_type = $package_type;
        $this->org = $org;
        $this->visibility = $visibility;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{package_type}', '{org}', '{visibility}'), array($this->package_type, $this->org, $this->visibility), '/orgs/{org}/packages?package_type={package_type}&visibility={visibility}'));
    }
    function validateResponse()
    {
    }
}
