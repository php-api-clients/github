<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveProjectLegacy
{
    private const OPERATION_ID = 'teams/remove-project-legacy';
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
        return new Request('delete', str_replace(['{team_id}', '{project_id}'], [$this->team_id, $this->project_id], '/teams/{team_id}/projects/{project_id}?'));
    }

    function validateResponse(): void
    {
    }
}
