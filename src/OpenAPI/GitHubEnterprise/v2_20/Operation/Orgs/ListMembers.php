<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListMembers
{
    private const OPERATION_ID = 'orgs/list-members';
    public string $org;
    /**Filter members returned in the list. Can be one of:
    \* `2fa_disabled` - Members without [two-factor authentication](https://github.com/blog/1614-two-factor-authentication) enabled. Available for organization owners.
    \* `all` - All members the authenticated user can see.**/
    public string $filter;
    /**Filter members returned by their role. Can be one of:
    \* `all` - All members of the organization, regardless of role.
    \* `admin` - Organization owners.
    \* `member` - Non-owner organization members.**/
    public string $role;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, string $filter = 'all', string $role = 'all', int $per_page = 30, int $page = 1)
    {
        $this->org      = $org;
        $this->filter   = $filter;
        $this->role     = $role;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{filter}', '{role}', '{per_page}', '{page}'], [$this->org, $this->filter, $this->role, $this->per_page, $this->page], '/orgs/{org}/members?filter={filter}&role={role}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
