<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Reactions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class CreateForTeamDiscussionCommentLegacy
{
    public const OPERATION_ID = 'reactions/create-for-team-discussion-comment-legacy';
    public const OPERATION_MATCH = 'POST /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions';
    private const METHOD = 'POST';
    private const PATH = '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The unique identifier of the team.**/
    private int $team_id;
    /**The number that identifies the discussion.**/
    private int $discussion_number;
    /**The number that identifies the comment.**/
    private int $comment_number;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions $hydrator, int $team_id, int $discussion_number, int $comment_number)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->team_id = $team_id;
        $this->discussion_number = $discussion_number;
        $this->comment_number = $comment_number;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Reactions\CreateForTeamDiscussionCommentInOrg\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{discussion_number}', '{comment_number}'), array($this->team_id, $this->discussion_number, $this->comment_number), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return Schema\Reaction
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Reaction
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 201:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Reaction::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Reaction::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
