<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions;

final class ListForTeamDiscussionCommentLegacy_
{
    private const OPERATION_ID = 'reactions/list-for-team-discussion-comment-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The unique identifier of the team.**/
    private readonly int $team_id;
    /**The number that identifies the discussion.**/
    private readonly int $discussion_number;
    /**The number that identifies the comment.**/
    private readonly int $comment_number;
    /**Returns a single [reaction type](https://docs.github.com/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to a team discussion comment.**/
    private readonly string $content;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, int $team_id, int $discussion_number, int $comment_number, string $content, int $per_page = 30, int $page = 1)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->team_id = $team_id;
        $this->discussion_number = $discussion_number;
        $this->comment_number = $comment_number;
        $this->content = $content;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}', '{discussion_number}', '{comment_number}', '{content}', '{per_page}', '{page}'), array($this->team_id, $this->discussion_number, $this->comment_number, $this->content, $this->per_page, $this->page), '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions?content={content}&per_page={per_page}&page={page}'));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Unknown\\C5Ac0Dd25322B6Ad19Ba645Bbaf8B0C36', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}