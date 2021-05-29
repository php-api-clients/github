<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListPreReceiveHooksForOrg
{
    private const OPERATION_ID = 'enterprise-admin/list-pre-receive-hooks-for-org';
    public string $org;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    /**One of `asc` (ascending) or `desc` (descending).**/
    public string $direction;
    /**The sort order for the response collection.**/
    public string $sort;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created')
    {
        $this->org       = $org;
        $this->per_page  = $per_page;
        $this->page      = $page;
        $this->direction = $direction;
        $this->sort      = $sort;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{per_page}', '{page}', '{direction}', '{sort}'], [$this->org, $this->per_page, $this->page, $this->direction, $this->sort], '/orgs/{org}/pre-receive-hooks?per_page={per_page}&page={page}&direction={direction}&sort={sort}'));
    }

    function validateResponse(): void
    {
    }
}
