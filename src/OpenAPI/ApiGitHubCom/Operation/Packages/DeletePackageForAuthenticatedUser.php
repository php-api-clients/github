<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeletePackageForAuthenticatedUser
{
    private const OPERATION_ID = 'packages/delete-package-for-authenticated-user';
    /**The type of supported package. Can be one of `npm`, `maven`, `rubygems`, `nuget`, `docker`, or `container`. For Docker images that use the package namespace `https://ghcr.io/owner/package-name`, use `container`.**/
    public string $package_type;
    /**The name of the package.**/
    public string $package_name;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($package_type, $package_name)
    {
        $this->package_type = $package_type;
        $this->package_name = $package_name;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{package_type}', '{package_name}'], [$this->package_type, $this->package_name], '/user/packages/{package_type}/{package_name}?'));
    }

    function validateResponse(): void
    {
    }
}
