<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Activity;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListReposStarredByUser
{
    public const OPERATION_ID = 'activity/list-repos-starred-by-user';
    public const OPERATION_MATCH = 'GET /users/{username}/starred';
    private const METHOD = 'GET';
    private const PATH = '/users/{username}/starred';
    /**The handle for the GitHub user account.**/
    private string $username;
    /**The property to sort the results by. `created` means when the repository was starred. `updated` means when the repository was last pushed to.**/
    private string $sort;
    /**The direction to sort the results by.**/
    private string $direction;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Users\CbUsernameRcb\Starred $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Users\CbUsernameRcb\Starred $hydrator, string $username, string $sort = 'created', string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->username = $username;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{username}', '{sort}', '{direction}', '{per_page}', '{page}'), array($this->username, $this->sort, $this->direction, $this->perPage, $this->page), self::PATH . '?sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }
    /**
     * @return Schema\Operation\Activity\ListReposStarredByUser\Response\Applicationjson\H200
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Activity\ListReposStarredByUser\Response\Applicationjson\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Activity\ListReposStarredByUser\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Activity\ListReposStarredByUser\Response\Applicationjson\H200::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
