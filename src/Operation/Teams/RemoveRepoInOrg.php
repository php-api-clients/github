<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Teams;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class RemoveRepoInOrg
{
    public const OPERATION_ID = 'teams/remove-repo-in-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $teamSlug;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    public function __construct(string $org, string $teamSlug, string $owner, string $repo)
    {
        $this->org = $org;
        $this->teamSlug = $teamSlug;
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{team_slug}', '{owner}', '{repo}'), array($this->org, $this->teamSlug, $this->owner, $this->repo), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
