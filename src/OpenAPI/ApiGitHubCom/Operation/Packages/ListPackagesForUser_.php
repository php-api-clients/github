<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

final class ListPackagesForUser_
{
    private const OPERATION_ID = 'packages/list-packages-for-user';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry.**/
    public string $package_type;
    /**The selected visibility of the packages. Only `container` package_types currently support `internal` visibility properly. For other ecosystems `internal` is synonymous with `private`. This parameter is optional and only filters an existing result set.**/
    public string $visibility;
    /**The handle for the GitHub user account.**/
    public string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($package_type, $visibility, $username)
    {
        $this->package_type = $package_type;
        $this->visibility = $visibility;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{package_type}', '{visibility}', '{username}'), array($this->package_type, $this->visibility, $this->username), '/users/{username}/packages?package_type={package_type}&visibility={visibility}'));
    }
    function validateResponse()
    {
    }
}
