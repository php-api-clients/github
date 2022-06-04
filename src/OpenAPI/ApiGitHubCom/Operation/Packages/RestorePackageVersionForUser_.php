<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

final class RestorePackageVersionForUser_
{
    private const OPERATION_ID = 'packages/restore-package-version-for-user';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry.**/
    public string $package_type;
    /**The name of the package.**/
    public string $package_name;
    /**The handle for the GitHub user account.**/
    public string $username;
    /**Unique identifier of the package version.**/
    public int $package_version_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($package_type, $package_name, $username, $package_version_id)
    {
        $this->package_type = $package_type;
        $this->package_name = $package_name;
        $this->username = $username;
        $this->package_version_id = $package_version_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{package_type}', '{package_name}', '{username}', '{package_version_id}'), array($this->package_type, $this->package_name, $this->username, $this->package_version_id), '/users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore'));
    }
    function validateResponse()
    {
    }
}
