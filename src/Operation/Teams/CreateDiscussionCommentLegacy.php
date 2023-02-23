<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Teams;

final class CreateDiscussionCommentLegacy
{
    public const OPERATION_ID = 'teams/create-discussion-comment-legacy';
    public const OPERATION_MATCH = 'POST /teams/{team_id}/discussions/{discussion_number}/comments';
    private const METHOD = 'POST';
    private const PATH = '/teams/{team_id}/discussions/{discussion_number}/comments';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The unique identifier of the team.**/
    private int $team_id;
    /**The number that identifies the discussion.**/
    private int $discussion_number;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments $hydrator, int $team_id, int $discussion_number)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->team_id = $team_id;
        $this->discussion_number = $discussion_number;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Teams\CreateDiscussionCommentInOrg\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{discussion_number}'), array($this->team_id, $this->discussion_number), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\TeamDiscussionComment
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\TeamDiscussionComment
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 201:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\TeamDiscussionComment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\TeamDiscussionComment', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
