<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Teams;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class RemoveRepoLegacy
{
    public const OPERATION_ID = 'teams/remove-repo-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/repos/{owner}/{repo}';
    private const METHOD = 'DELETE';
    private const PATH = '/teams/{team_id}/repos/{owner}/{repo}';
    /**The unique identifier of the team.**/
    private int $teamId;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    public function __construct(int $teamId, string $owner, string $repo)
    {
        $this->teamId = $teamId;
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{owner}', '{repo}'), array($this->teamId, $this->owner, $this->repo), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
