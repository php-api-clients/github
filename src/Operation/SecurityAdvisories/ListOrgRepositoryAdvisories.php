<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\SecurityAdvisories;

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

final class ListOrgRepositoryAdvisories
{
    public const OPERATION_ID    = 'security-advisories/list-org-repository-advisories';
    public const OPERATION_MATCH = 'GET /orgs/{org}/security-advisories';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/security-advisories';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results before this cursor. **/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results after this cursor. **/
    private string $after;
    /**Filter by the state of the repository advisories. Only advisories of this state will be returned. **/
    private string $state;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The property to sort the results by. **/
    private string $sort;
    /**The number of advisories to return per page. **/
    private int $perPage;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Orgs\Org\SecurityAdvisories $hydrator, string $org, string $before, string $after, string $state, string $direction = 'desc', string $sort = 'created', int $perPage = 30)
    {
        $this->org       = $org;
        $this->before    = $before;
        $this->after     = $after;
        $this->state     = $state;
        $this->direction = $direction;
        $this->sort      = $sort;
        $this->perPage   = $perPage;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{before}', '{after}', '{state}', '{direction}', '{sort}', '{per_page}'], [$this->org, $this->before, $this->after, $this->state, $this->direction, $this->sort, $this->perPage], self::PATH . '?before={before}&after={after}&state={state}&direction={direction}&sort={sort}&per_page={per_page}'));
    }

    /** @return Observable<Schema\RepositoryAdvisory> */
    public function createResponse(ResponseInterface $response): Observable
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\RepositoryAdvisory {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryAdvisory::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RepositoryAdvisory::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Bad Request
                     **/

                    case 400:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(400, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
            case 'application/scim+json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Bad Request
                     **/
                    case 400:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ScimError(400, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
