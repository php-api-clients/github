<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CheckPermissionsForProjectLegacy
{
    private const OPERATION_ID = 'teams/check-permissions-for-project-legacy';
    public int $team_id;
    public int $project_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($team_id, $project_id)
    {
        $this->team_id    = $team_id;
        $this->project_id = $project_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{team_id}', '{project_id}'], [$this->team_id, $this->project_id], '/teams/{team_id}/projects/{project_id}?'));
    }

    function validateResponse(): void
    {
    }
}
