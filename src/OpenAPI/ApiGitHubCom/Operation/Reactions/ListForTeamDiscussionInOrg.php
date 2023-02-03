<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions;

final class ListForTeamDiscussionInOrg
{
    private const OPERATION_ID = 'reactions/list-for-team-discussion-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $team_slug;
    /**The number that identifies the discussion.**/
    private int $discussion_number;
    /**Returns a single [reaction type](https://docs.github.com/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to a team discussion.**/
    private string $content;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $org, string $team_slug, int $discussion_number, string $content, int $per_page = 30, int $page = 1)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->content = $content;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{org}', '{team_slug}', '{discussion_number}', '{content}', '{per_page}', '{page}'), array($this->org, $this->team_slug, $this->discussion_number, $this->content, $this->per_page, $this->page), '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions?content={content}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction>
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
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Reaction', $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
