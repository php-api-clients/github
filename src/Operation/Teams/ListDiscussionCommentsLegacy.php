<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Teams;

final class ListDiscussionCommentsLegacy
{
    public const OPERATION_ID = 'teams/list-discussion-comments-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/discussions/{discussion_number}/comments';
    private const METHOD = 'GET';
    private const PATH = '/teams/{team_id}/discussions/{discussion_number}/comments';
    /**The unique identifier of the team.**/
    private int $team_id;
    /**The number that identifies the discussion.**/
    private int $discussion_number;
    /**The direction to sort the results by.**/
    private string $direction;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments $hydrator, int $team_id, int $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->team_id = $team_id;
        $this->discussion_number = $discussion_number;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{discussion_number}', '{direction}', '{per_page}', '{page}'), array($this->team_id, $this->discussion_number, $this->direction, $this->per_page, $this->page), self::PATH . '?direction={direction}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\Schema\TeamDiscussionComment>
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
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\TeamDiscussionComment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\Schema\TeamDiscussionComment {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\TeamDiscussionComment', $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
