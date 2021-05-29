<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListIdpGroupsForLegacy
{
    private const OPERATION_ID = 'teams/list-idp-groups-for-legacy';
    public int $team_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($team_id)
    {
        $this->team_id = $team_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{team_id}'], [$this->team_id], '/teams/{team_id}/team-sync/group-mappings?'));
    }

    function validateResponse(): void
    {
    }
}
