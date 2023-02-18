<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveRepoLegacy
{
    public const OPERATION_ID    = 'teams/remove-repo-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/repos/{owner}/{repo}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/teams/{team_id}/repos/{owner}/{repo}';
    /**The unique identifier of the team.**/
    private int $team_id;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;

    public function __construct(int $team_id, string $owner, string $repo)
    {
        $this->team_id = $team_id;
        $this->owner   = $owner;
        $this->repo    = $repo;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{owner}', '{repo}'], [$this->team_id, $this->owner, $this->repo], self::PATH));
    }

    function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
