<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Teams;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class RemoveMembershipForUserInOrg
{
    public const OPERATION_ID = 'teams/remove-membership-for-user-in-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/memberships/{username}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/teams/{team_slug}/memberships/{username}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $teamSlug;
    /**The handle for the GitHub user account.**/
    private string $username;
    public function __construct(string $org, string $teamSlug, string $username)
    {
        $this->org = $org;
        $this->teamSlug = $teamSlug;
        $this->username = $username;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{team_slug}', '{username}'), array($this->org, $this->teamSlug, $this->username), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
