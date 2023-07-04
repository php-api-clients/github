<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Packages;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class ListPackagesForAuthenticatedUser
{
    public const OPERATION_ID    = 'packages/list-packages-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/packages';
    private const METHOD         = 'GET';
    private const PATH           = '/user/packages';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry. **/
    private string $packageType;
    /**The selected visibility of the packages.  This parameter is optional and only filters an existing result set.

    The `internal` visibility is only supported for GitHub Packages registries that allow for granular permissions. For other ecosystems `internal` is synonymous with `private`.
    For the list of GitHub Packages registries that support granular permissions, see "[About permissions for GitHub Packages](https://docs.github.com/packages/learn-github-packages/about-permissions-for-github-packages#granular-permissions-for-userorganization-scoped-packages)." **/
    private string $visibility;
    /**Page number of the results to fetch. **/
    private int $page;
    /**The number of results per page (max 100). **/
    private int $perPage;

    public function __construct(string $packageType, string $visibility, int $page = 1, int $perPage = 30)
    {
        $this->packageType = $packageType;
        $this->visibility  = $visibility;
        $this->page        = $page;
        $this->perPage     = $perPage;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{package_type}', '{visibility}', '{page}', '{per_page}'], [$this->packageType, $this->visibility, $this->page, $this->perPage], self::PATH . '?package_type={package_type}&visibility={visibility}&page={page}&per_page={per_page}'));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * The value of `per_page` multiplied by `page` cannot be greater than 10000.
             **/
            case 400:
                return ['code' => 400];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
