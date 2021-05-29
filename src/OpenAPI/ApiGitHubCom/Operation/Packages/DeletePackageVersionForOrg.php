<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeletePackageVersionForOrg
{
    private const OPERATION_ID = 'packages/delete-package-version-for-org';
    /**The type of supported package. Can be one of `npm`, `maven`, `rubygems`, `nuget`, `docker`, or `container`. For Docker images that use the package namespace `https://ghcr.io/owner/package-name`, use `container`.**/
    public string $package_type;
    /**The name of the package.**/
    public string $package_name;
    public string $org;
    /**Unique identifier of the package version.**/
    public int $package_version_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($package_type, $package_name, $org, $package_version_id)
    {
        $this->package_type       = $package_type;
        $this->package_name       = $package_name;
        $this->org                = $org;
        $this->package_version_id = $package_version_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{package_type}', '{package_name}', '{org}', '{package_version_id}'], [$this->package_type, $this->package_name, $this->org, $this->package_version_id], '/orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}?'));
    }

    function validateResponse(): void
    {
    }
}
