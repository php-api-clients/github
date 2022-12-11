<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

final class RestorePackageForUser_
{
    private const OPERATION_ID = 'packages/restore-package-for-user';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry.**/
    private readonly string $package_type;
    /**The name of the package.**/
    private readonly string $package_name;
    /**The handle for the GitHub user account.**/
    private readonly string $username;
    /**package token**/
    private readonly string $token;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $package_type, string $package_name, string $username, string $token)
    {
        $this->package_type = $package_type;
        $this->package_name = $package_name;
        $this->username = $username;
        $this->token = $token;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{package_type}', '{package_name}', '{username}', '{token}'), array($this->package_type, $this->package_name, $this->username, $this->token), '/users/{username}/packages/{package_type}/{package_name}/restore?token={token}'));
    }
    function validateResponse()
    {
    }
}
