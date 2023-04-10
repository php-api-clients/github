<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Teams;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class GetMemberLegacy
{
    public const OPERATION_ID = 'teams/get-member-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/members/{username}';
    private const METHOD = 'GET';
    private const PATH = '/teams/{team_id}/members/{username}';
    /**The unique identifier of the team.**/
    private int $teamId;
    /**The handle for the GitHub user account.**/
    private string $username;
    public function __construct(int $teamId, string $username)
    {
        $this->teamId = $teamId;
        $this->username = $username;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{username}'), array($this->teamId, $this->username), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
