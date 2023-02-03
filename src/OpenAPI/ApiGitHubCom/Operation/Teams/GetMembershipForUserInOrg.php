<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

final class GetMembershipForUserInOrg
{
    private const OPERATION_ID = 'teams/get-membership-for-user-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/memberships/{username}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $team_slug;
    /**The handle for the GitHub user account.**/
    private string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $org, string $team_slug, string $username)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->username = $username;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{org}', '{team_slug}', '{username}'), array($this->org, $this->team_slug, $this->username), '/orgs/{org}/teams/{team_slug}/memberships/{username}'));
    }
    /**
     * @return \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership|int
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership|int
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamMembership::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\TeamMembership', $body);
                }
                break;
            /**if user has no team membership**/
            case 404:
                return 404;
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
