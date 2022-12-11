<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

final class GetPackageVersionForAuthenticatedUser_
{
    private const OPERATION_ID = 'packages/get-package-version-for-authenticated-user';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry.**/
    private readonly string $package_type;
    /**The name of the package.**/
    private readonly string $package_name;
    /**Unique identifier of the package version.**/
    private readonly int $package_version_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $package_type, string $package_name, int $package_version_id)
    {
        $this->package_type = $package_type;
        $this->package_name = $package_name;
        $this->package_version_id = $package_version_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{package_type}', '{package_name}', '{package_version_id}'), array($this->package_type, $this->package_name, $this->package_version_id), '/user/packages/{package_type}/{package_name}/versions/{package_version_id}'));
    }
    function validateResponse()
    {
    }
}
