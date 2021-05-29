<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListMembersInOrg
{
    private const OPERATION_ID = 'teams/list-members-in-org';
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    /**Filters members returned by their role in the team. Can be one of:
    \* `member` - normal members of the team.
    \* `maintainer` - team maintainers.
    \* `all` - all members of the team.**/
    public string $role;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $team_slug, string $role = 'all', int $per_page = 30, int $page = 1)
    {
        $this->org       = $org;
        $this->team_slug = $team_slug;
        $this->role      = $role;
        $this->per_page  = $per_page;
        $this->page      = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{team_slug}', '{role}', '{per_page}', '{page}'], [$this->org, $this->team_slug, $this->role, $this->per_page, $this->page], '/orgs/{org}/teams/{team_slug}/members?role={role}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
