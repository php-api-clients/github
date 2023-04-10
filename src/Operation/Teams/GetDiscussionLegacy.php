<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Teams;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class GetDiscussionLegacy
{
    public const OPERATION_ID = 'teams/get-discussion-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/discussions/{discussion_number}';
    private const METHOD = 'GET';
    private const PATH = '/teams/{team_id}/discussions/{discussion_number}';
    /**The unique identifier of the team.**/
    private int $teamId;
    /**The number that identifies the discussion.**/
    private int $discussionNumber;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb $hydrator, int $teamId, int $discussionNumber)
    {
        $this->teamId = $teamId;
        $this->discussionNumber = $discussionNumber;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{discussion_number}'), array($this->teamId, $this->discussionNumber), self::PATH));
    }
    /**
     * @return Schema\TeamDiscussion
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\TeamDiscussion
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\TeamDiscussion::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\TeamDiscussion::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
