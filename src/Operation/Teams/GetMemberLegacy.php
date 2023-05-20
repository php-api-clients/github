<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class GetMemberLegacy
{
    public const OPERATION_ID    = 'teams/get-member-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/members/{username}';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}/members/{username}';
    /**The unique identifier of the team. **/
    private int $teamId;
    /**The handle for the GitHub user account. **/
    private string $username;

    public function __construct(int $teamId, string $username)
    {
        $this->teamId   = $teamId;
        $this->username = $username;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{username}'], [$this->teamId, $this->username], self::PATH));
    }

    /**
     * @return array{code: int}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * if user is a member
             **/
            case 204:
                return ['code' => 204];
            /**
             * if user is not a member
             **/

            case 404:
                return ['code' => 404];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
