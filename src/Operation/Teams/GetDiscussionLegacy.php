<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Teams;

final class GetDiscussionLegacy
{
    public const OPERATION_ID = 'teams/get-discussion-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/discussions/{discussion_number}';
    private const METHOD = 'GET';
    private const PATH = '/teams/{team_id}/discussions/{discussion_number}';
    /**The unique identifier of the team.**/
    private int $team_id;
    /**The number that identifies the discussion.**/
    private int $discussion_number;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb $hydrator, int $team_id, int $discussion_number)
    {
        $this->team_id = $team_id;
        $this->discussion_number = $discussion_number;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{discussion_number}'), array($this->team_id, $this->discussion_number), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\TeamDiscussion
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\TeamDiscussion
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\TeamDiscussion::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\TeamDiscussion', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
