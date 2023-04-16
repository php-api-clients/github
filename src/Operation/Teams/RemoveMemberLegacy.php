<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveMemberLegacy
{
    public const OPERATION_ID    = 'teams/remove-member-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/members/{username}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/teams/{team_id}/members/{username}';
    /**The unique identifier of the team.**/
    private int $teamId;
    /**The handle for the GitHub user account.**/
    private string $username;

    public function __construct(int $teamId, string $username)
    {
        $this->teamId   = $teamId;
        $this->username = $username;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{username}'], [$this->teamId, $this->username], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
