<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Migrations;

final class ListForOrg
{
    public const OPERATION_ID = 'migrations/list-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/migrations';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/migrations';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Exclude attributes from the API response to improve performance**/
    private array $exclude;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations $hydrator, string $org, array $exclude, int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->exclude = $exclude;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{exclude}', '{per_page}', '{page}'), array($this->org, $this->exclude, $this->per_page, $this->page), self::PATH . '?exclude={exclude}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\Schema\Migration>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Migration::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\Schema\Migration {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Migration', $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
