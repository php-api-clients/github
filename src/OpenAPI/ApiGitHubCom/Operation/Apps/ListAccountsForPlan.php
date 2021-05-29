<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListAccountsForPlan
{
    private const OPERATION_ID = 'apps/list-accounts-for-plan';
    /**plan_id parameter**/
    public int $plan_id;
    /**One of `created` (when the repository was starred) or `updated` (when it was last pushed to).**/
    public string $sort;
    /**To return the oldest accounts first, set to `asc`. Can be one of `asc` or `desc`. Ignored without the `sort` parameter.**/
    public string $direction;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($plan_id, string $sort = 'created', $direction, int $per_page = 30, int $page = 1)
    {
        $this->plan_id   = $plan_id;
        $this->sort      = $sort;
        $this->direction = $direction;
        $this->per_page  = $per_page;
        $this->page      = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{plan_id}', '{sort}', '{direction}', '{per_page}', '{page}'], [$this->plan_id, $this->sort, $this->direction, $this->per_page, $this->page], '/marketplace_listing/plans/{plan_id}/accounts?sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
