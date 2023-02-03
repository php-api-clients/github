<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class List_
{
    private const OPERATION_ID = 'orgs/list';
    public const OPERATION_MATCH = 'GET /organizations';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**An organization ID. Only return organizations with an ID greater than this ID.**/
    private int $since;
    /**The number of results per page (max 100).**/
    private int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, int $since, int $per_page = 30)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->since = $since;
        $this->per_page = $per_page;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{since}', '{per_page}'), array($this->since, $this->per_page), '/organizations?since={since}&per_page={per_page}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationSimple>|int
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|int
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationSimple {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\OrganizationSimple', $body);
                        });
                }
                break;
            /**Not modified**/
            case 304:
                return 304;
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
