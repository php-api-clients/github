<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class ListSelectedReposForOrgVariable
{
    public const OPERATION_ID    = 'actions/list-selected-repos-for-org-variable';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/variables/{name}/repositories';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/variables/{name}/repositories';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The name of the variable. **/
    private string $name;
    /**Page number of the results to fetch. **/
    private int $page;
    /**The number of results per page (max 100). **/
    private int $perPage;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories $hydrator, string $org, string $name, int $page = 1, int $perPage = 30)
    {
        $this->org                     = $org;
        $this->name                    = $name;
        $this->page                    = $page;
        $this->perPage                 = $perPage;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{name}', '{page}', '{per_page}'], [$this->org, $this->name, $this->page, $this->perPage], self::PATH . '?page={page}&per_page={per_page}'));
    }

    /**
     * @return Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|array{code: int}
     */
    public function createResponse(ResponseInterface $response): Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|array
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Response when the visibility of the variable is not set to `selected`
             **/
            case 409:
                return ['code' => 409];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
