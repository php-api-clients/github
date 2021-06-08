<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListReposInOrg
{
    private const OPERATION_ID = 'teams/list-repos-in-org';
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $team_slug, int $per_page = 30, int $page = 1)
    {
        $this->org       = $org;
        $this->team_slug = $team_slug;
        $this->per_page  = $per_page;
        $this->page      = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{team_slug}', '{per_page}', '{page}'], [$this->org, $this->team_slug, $this->per_page, $this->page], '/orgs/{org}/teams/{team_slug}/repos?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
