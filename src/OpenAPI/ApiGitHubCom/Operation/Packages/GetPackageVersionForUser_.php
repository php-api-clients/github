<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

final class GetPackageVersionForUser_
{
    private const OPERATION_ID = 'packages/get-package-version-for-user';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry.**/
    private readonly string $package_type;
    /**The name of the package.**/
    private readonly string $package_name;
    /**Unique identifier of the package version.**/
    private readonly int $package_version_id;
    /**The handle for the GitHub user account.**/
    private readonly string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $package_type, string $package_name, int $package_version_id, string $username)
    {
        $this->package_type = $package_type;
        $this->package_name = $package_name;
        $this->package_version_id = $package_version_id;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{package_type}', '{package_name}', '{package_version_id}', '{username}'), array($this->package_type, $this->package_name, $this->package_version_id, $this->username), '/users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}'));
    }
    function validateResponse()
    {
    }
}
