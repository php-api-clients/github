<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Teams\CbTeamIdRcb\Members\CbUsernameRcb;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class AddMemberLegacy
{
    public const OPERATION_ID    = 'teams/add-member-legacy';
    public const OPERATION_MATCH = 'PUT /teams/{team_id}/members/{username}';
    private const METHOD         = 'PUT';
    private const PATH           = '/teams/{team_id}/members/{username}';
    /**The unique identifier of the team.**/
    private int $team_id;
    /**The handle for the GitHub user account.**/
    private string $username;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly CbUsernameRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, CbUsernameRcb $hydrator, int $team_id, string $username)
    {
        $this->team_id                 = $team_id;
        $this->username                = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{username}'], [$this->team_id, $this->username], self::PATH));
    }

    function createResponse(ResponseInterface $response): BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Forbidden**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
