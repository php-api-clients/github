<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

final class GetMemberLegacy
{
    private const OPERATION_ID = 'teams/get-member-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/members/{username}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The unique identifier of the team.**/
    private int $team_id;
    /**The handle for the GitHub user account.**/
    private string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, int $team_id, string $username)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->team_id = $team_id;
        $this->username = $username;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{team_id}', '{username}'), array($this->team_id, $this->username), '/teams/{team_id}/members/{username}'));
    }
    /**
     * @return int
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : int
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**if user is a member**/
            case 204:
                return 204;
                break;
            /**if user is not a member**/
            case 404:
                return 404;
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
