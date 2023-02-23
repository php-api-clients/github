<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Projects;

final class ListCards
{
    public const OPERATION_ID = 'projects/list-cards';
    public const OPERATION_MATCH = 'GET /projects/columns/{column_id}/cards';
    private const METHOD = 'GET';
    private const PATH = '/projects/columns/{column_id}/cards';
    /**The unique identifier of the column.**/
    private int $column_id;
    /**Filters the project cards that are returned by the card's state.**/
    private string $archived_state;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Cards $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Cards $hydrator, int $column_id, string $archived_state = 'not_archived', int $per_page = 30, int $page = 1)
    {
        $this->column_id = $column_id;
        $this->archived_state = $archived_state;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{column_id}', '{archived_state}', '{per_page}', '{page}'), array($this->column_id, $this->archived_state, $this->per_page, $this->page), self::PATH . '?archived_state={archived_state}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\Schema\ProjectCard>|\ApiClients\Client\Github\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|\ApiClients\Client\Github\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Requires authentication**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\ProjectCard::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\Schema\ProjectCard {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\ProjectCard', $body);
                        });
                }
                break;
            /**Requires authentication**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                }
                break;
            /**Requires authentication**/
            case 401:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
