<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class CheckPermissionsForRepoLegacy
{
    public const OPERATION_ID    = 'teams/check-permissions-for-repo-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/repos/{owner}/{repo}';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}/repos/{owner}/{repo}';
    /**The unique identifier of the team.**/
    private int $teamId;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Teams\CbTeamIdRcb\Repos\CbOwnerRcb\CbRepoRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Teams\CbTeamIdRcb\Repos\CbOwnerRcb\CbRepoRcb $hydrator, int $teamId, string $owner, string $repo)
    {
        $this->teamId                  = $teamId;
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{owner}', '{repo}'], [$this->teamId, $this->owner, $this->repo], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\TeamRepository
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Alternative response with extra repository information
                    **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TeamRepository::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\TeamRepository::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
