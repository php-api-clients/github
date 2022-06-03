<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

final class ListAccountsForPlanStubbed_
{
    private const OPERATION_ID = 'apps/list-accounts-for-plan-stubbed';
    /**The unique identifier of the plan.**/
    public int $plan_id;
    /**The property to sort the results by. `created` means when the repository was starred. `updated` means when the repository was last pushed to.**/
    public string $sort;
    /**To return the oldest accounts first, set to `asc`. Ignored without the `sort` parameter.**/
    public string $direction;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($plan_id, string $sort = 'created', $direction, int $per_page = 30, int $page = 1)
    {
        $this->plan_id = $plan_id;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{plan_id}', '{sort}', '{direction}', '{per_page}', '{page}'), array($this->plan_id, $this->sort, $this->direction, $this->per_page, $this->page), '/marketplace_listing/stubbed/plans/{plan_id}/accounts?sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
