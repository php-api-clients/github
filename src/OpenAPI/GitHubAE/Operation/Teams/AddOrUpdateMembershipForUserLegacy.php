<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class AddOrUpdateMembershipForUserLegacy
{
    private const OPERATION_ID = 'teams/add-or-update-membership-for-user-legacy';
    public int $team_id;
    public string $username;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($team_id, $username)
    {
        $this->team_id  = $team_id;
        $this->username = $username;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{team_id}', '{username}'], [$this->team_id, $this->username], '/teams/{team_id}/memberships/{username}?'));
    }

    function validateResponse(): void
    {
    }
}
