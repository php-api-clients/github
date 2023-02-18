<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Orgs\CbOrgRcb\Repos;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository;
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
    public const OPERATION_ID    = 'repos/list-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/repos';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/repos';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Specifies the types of repositories you want returned.**/
    private string $type;
    /**The order to sort by. Default: `asc` when using `full_name`, otherwise `desc`.**/
    private string $direction;
    /**The property to sort the results by.**/
    private string $sort;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Repos $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Repos $hydrator, string $org, string $type, string $direction, string $sort = 'created', int $per_page = 30, int $page = 1)
    {
        $this->org                     = $org;
        $this->type                    = $type;
        $this->direction               = $direction;
        $this->sort                    = $sort;
        $this->per_page                = $per_page;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{type}', '{direction}', '{sort}', '{per_page}', '{page}'], [$this->org, $this->type, $this->direction, $this->sort, $this->per_page, $this->page], self::PATH . '?type={type}&direction={direction}&sort={sort}&per_page={per_page}&page={page}'));
    }

    /**
     * @return Observable<MinimalRepository>
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(MinimalRepository::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): MinimalRepository {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\MinimalRepository', $body);
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
