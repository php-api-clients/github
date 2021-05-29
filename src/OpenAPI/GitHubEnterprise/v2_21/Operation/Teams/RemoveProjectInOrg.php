<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveProjectInOrg
{
    private const OPERATION_ID = 'teams/remove-project-in-org';
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    public int $project_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $team_slug, $project_id)
    {
        $this->org        = $org;
        $this->team_slug  = $team_slug;
        $this->project_id = $project_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{org}', '{team_slug}', '{project_id}'], [$this->org, $this->team_slug, $this->project_id], '/orgs/{org}/teams/{team_slug}/projects/{project_id}?'));
    }

    function validateResponse(): void
    {
    }
}
