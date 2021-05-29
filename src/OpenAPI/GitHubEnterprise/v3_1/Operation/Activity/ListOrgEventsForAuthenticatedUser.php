<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListOrgEventsForAuthenticatedUser
{
    private const OPERATION_ID = 'activity/list-org-events-for-authenticated-user';
    public string $username;
    public string $org;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($username, $org, int $per_page = 30, int $page = 1)
    {
        $this->username = $username;
        $this->org      = $org;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{username}', '{org}', '{per_page}', '{page}'], [$this->username, $this->org, $this->per_page, $this->page], '/users/{username}/events/orgs/{org}?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
