<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

final class ListPackagesForAuthenticatedUser
{
    private const OPERATION_ID = 'packages/list-packages-for-authenticated-user';
    /**The type of supported package. Can be one of `npm`, `maven`, `rubygems`, `nuget`, `docker`, or `container`. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry.**/
    public string $package_type;
    /**The selected visibility of the packages. Can be one of `public`, `private`, or `internal`. Only `container` package_types currently support `internal` visibility properly. For other ecosystems `internal` is synonymous with `private`. This parameter is optional and only filters an existing result set.**/
    public string $visibility;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($package_type, $visibility)
    {
        $this->package_type = $package_type;
        $this->visibility = $visibility;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{package_type}', '{visibility}'), array($this->package_type, $this->visibility), '/user/packages?package_type={package_type}&visibility={visibility}'));
    }
    function validateResponse()
    {
    }
}
