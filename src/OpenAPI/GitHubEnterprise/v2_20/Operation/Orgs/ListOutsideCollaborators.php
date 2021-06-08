<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListOutsideCollaborators
{
    private const OPERATION_ID = 'orgs/list-outside-collaborators';
    public string $org;
    /**Filter the list of outside collaborators. Can be one of:
    \* `2fa_disabled`: Outside collaborators without [two-factor authentication](https://github.com/blog/1614-two-factor-authentication) enabled.
    \* `all`: All outside collaborators.**/
    public string $filter;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, string $filter = 'all', int $per_page = 30, int $page = 1)
    {
        $this->org      = $org;
        $this->filter   = $filter;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{filter}', '{per_page}', '{page}'], [$this->org, $this->filter, $this->per_page, $this->page], '/orgs/{org}/outside_collaborators?filter={filter}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
