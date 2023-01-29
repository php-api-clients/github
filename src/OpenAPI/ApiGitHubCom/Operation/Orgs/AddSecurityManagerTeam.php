<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class AddSecurityManagerTeam
{
    private const OPERATION_ID = 'orgs/add-security-manager-team';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/security-managers/teams/{team_slug}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $team_slug;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator, string $org, string $team_slug)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->org = $org;
        $this->team_slug = $team_slug;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('PUT', \str_replace(array('{org}', '{team_slug}'), array($this->org, $this->team_slug), '/orgs/{org}/security-managers/teams/{team_slug}'));
    }
    /**
     * @return int
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : int
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 204:
                return 204;
                break;
            /**The organization has reached the maximum number of security manager teams.**/
            case 409:
                return 409;
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
