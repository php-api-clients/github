<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning;

final class ListAlertsForOrg
{
    private const OPERATION_ID = 'code-scanning/list-alerts-for-org';
    /****/
    public string $org;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events before this cursor.**/
    public string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events after this cursor.**/
    public string $after;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Results per page (max 100)**/
    public int $per_page;
    /**One of `asc` (ascending) or `desc` (descending).**/
    public string $direction;
    /**Set to `open`, `fixed`, or `dismissed` to list code scanning alerts in a specific state.**/
    public string $state;
    /**Can be one of `created`, `updated`.**/
    public string $sort;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $before, $after, int $page = 1, int $per_page = 30, string $direction = 'desc', $state, string $sort = 'created')
    {
        $this->org = $org;
        $this->before = $before;
        $this->after = $after;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->direction = $direction;
        $this->state = $state;
        $this->sort = $sort;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{before}', '{after}', '{page}', '{per_page}', '{direction}', '{state}', '{sort}'), array($this->org, $this->before, $this->after, $this->page, $this->per_page, $this->direction, $this->state, $this->sort), '/orgs/{org}/code-scanning/alerts?before={before}&after={after}&page={page}&per_page={per_page}&direction={direction}&state={state}&sort={sort}'));
    }
    function validateResponse()
    {
    }
}
