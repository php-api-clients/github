<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

final class UpdateDiscussionCommentInOrg
{
    private const OPERATION_ID = 'teams/update-discussion-comment-in-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $team_slug;
    /**The number that identifies the discussion.**/
    private int $discussion_number;
    /**The number that identifies the comment.**/
    private int $comment_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $org, string $team_slug, int $discussion_number, int $comment_number)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->comment_number = $comment_number;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateDiscussionCommentInOrg\Request\Application\Json::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
        return new \RingCentral\Psr7\Request('PATCH', \str_replace(array('{org}', '{team_slug}', '{discussion_number}', '{comment_number}'), array($this->org, $this->team_slug, $this->discussion_number, $this->comment_number), '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}'), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussionComment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\TeamDiscussionComment', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
