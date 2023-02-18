<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

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
    private int $team_id;
    /**The handle for the GitHub user account.**/
    private string $username;

    public function __construct(int $team_id, string $username)
    {
        $this->team_id  = $team_id;
        $this->username = $username;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{username}'], [$this->team_id, $this->username], self::PATH));
    }

    function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
