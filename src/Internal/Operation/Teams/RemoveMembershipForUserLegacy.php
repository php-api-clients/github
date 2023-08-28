<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class RemoveMembershipForUserLegacy
{
    public const OPERATION_ID    = 'teams/remove-membership-for-user-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/memberships/{username}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/teams/{team_id}/memberships/{username}';
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

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
            /**
             * if team synchronization is set up
             **/

            case 403:
                return ['code' => 403];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
