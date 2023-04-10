<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Teams;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class CheckPermissionsForRepoLegacy
{
    public const OPERATION_ID = 'teams/check-permissions-for-repo-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/repos/{owner}/{repo}';
    private const METHOD = 'GET';
    private const PATH = '/teams/{team_id}/repos/{owner}/{repo}';
    /**The unique identifier of the team.**/
    private int $teamId;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Teams\CbTeamIdRcb\Repos\CbOwnerRcb\CbRepoRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Teams\CbTeamIdRcb\Repos\CbOwnerRcb\CbRepoRcb $hydrator, int $teamId, string $owner, string $repo)
    {
        $this->teamId = $teamId;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{owner}', '{repo}'), array($this->teamId, $this->owner, $this->repo), self::PATH));
    }
    /**
     * @return Schema\TeamRepository
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\TeamRepository
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Alternative response with extra repository information**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\TeamRepository::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\TeamRepository::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
