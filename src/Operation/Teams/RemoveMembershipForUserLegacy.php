<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Teams;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class RemoveMembershipForUserLegacy
{
    public const OPERATION_ID = 'teams/remove-membership-for-user-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/memberships/{username}';
    private const METHOD = 'DELETE';
    private const PATH = '/teams/{team_id}/memberships/{username}';
    /**The unique identifier of the team.**/
    private int $teamId;
    /**The handle for the GitHub user account.**/
    private string $username;
    public function __construct(int $teamId, string $username)
    {
        $this->teamId = $teamId;
        $this->username = $username;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{username}'), array($this->teamId, $this->username), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
