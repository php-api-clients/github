<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Orgs\CbOrgRcb\Migrations;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migration;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;

use function json_decode;
use function str_replace;

final class ListForOrg
{
    public const OPERATION_ID    = 'migrations/list-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/migrations';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/migrations';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Exclude attributes from the API response to improve performance**/
    private array $exclude;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Migrations $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Migrations $hydrator, string $org, array $exclude, int $per_page = 30, int $page = 1)
    {
        $this->org                     = $org;
        $this->exclude                 = $exclude;
        $this->per_page                = $per_page;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{exclude}', '{per_page}', '{page}'], [$this->org, $this->exclude, $this->per_page, $this->page], self::PATH . '?exclude={exclude}&per_page={per_page}&page={page}'));
    }

    /**
     * @return Observable<Migration>
     */
    function createResponse(ResponseInterface $response): Observable
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Migration::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Migration {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Migration', $body);
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
