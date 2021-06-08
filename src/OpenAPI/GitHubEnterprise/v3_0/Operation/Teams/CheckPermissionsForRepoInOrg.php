<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CheckPermissionsForRepoInOrg
{
    private const OPERATION_ID = 'teams/check-permissions-for-repo-in-org';
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    public string $owner;
    public string $repo;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $team_slug, $owner, $repo)
    {
        $this->org       = $org;
        $this->team_slug = $team_slug;
        $this->owner     = $owner;
        $this->repo      = $repo;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{team_slug}', '{owner}', '{repo}'], [$this->org, $this->team_slug, $this->owner, $this->repo], '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}?'));
    }

    function validateResponse(): void
    {
    }
}
