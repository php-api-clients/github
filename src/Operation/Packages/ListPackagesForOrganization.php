<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Packages;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class ListPackagesForOrganization
{
    public const OPERATION_ID    = 'packages/list-packages-for-organization';
    public const OPERATION_MATCH = 'GET /orgs/{org}/packages';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/packages';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry. **/
    private string $packageType;
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The selected visibility of the packages.  This parameter is optional and only filters an existing result set.

    The `internal` visibility is only supported for GitHub Packages registries that allow for granular permissions. For other ecosystems `internal` is synonymous with `private`.
    For the list of GitHub Packages registries that support granular permissions, see "[About permissions for GitHub Packages](https://docs.github.com/packages/learn-github-packages/about-permissions-for-github-packages#granular-permissions-for-userorganization-scoped-packages)." **/
    private string $visibility;
    /**Page number of the results to fetch. **/
    private int $page;
    /**The number of results per page (max 100). **/
    private int $perPage;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Orgs\Org\Packages $hydrator, string $packageType, string $org, string $visibility, int $page = 1, int $perPage = 30)
    {
        $this->packageType = $packageType;
        $this->org         = $org;
        $this->visibility  = $visibility;
        $this->page        = $page;
        $this->perPage     = $perPage;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{package_type}', '{org}', '{visibility}', '{page}', '{per_page}'], [$this->packageType, $this->org, $this->visibility, $this->page, $this->perPage], self::PATH . '?package_type={package_type}&visibility={visibility}&page={page}&per_page={per_page}'));
    }

    /** @return Observable<Schema\Package>|array{code: int} */
    public function createResponse(ResponseInterface $response): Observable|array
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Package {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Package::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\Package::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Requires authentication
                     **/

                    case 401:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(401, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

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
