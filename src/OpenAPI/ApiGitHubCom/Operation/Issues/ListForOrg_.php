<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues;

final class ListForOrg_
{
    private const OPERATION_ID = 'issues/list-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**Indicates which sorts of issues to return. `assigned` means issues assigned to you. `created` means issues created by you. `mentioned` means issues mentioning you. `subscribed` means issues you're subscribed to updates for. `all` or `repos` means all issues you can see, regardless of participation or creation.**/
    private readonly string $filter;
    /**Indicates the state of the issues to return.**/
    private readonly string $state;
    /**A list of comma separated label names. Example: `bug,ui,@high`**/
    private readonly string $labels;
    /**What to sort results by.**/
    private readonly string $sort;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private readonly string $since;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $filter = 'assigned', string $state = 'open', string $labels, string $sort = 'created', string $direction = 'desc', string $since, int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->filter = $filter;
        $this->state = $state;
        $this->labels = $labels;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->since = $since;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{filter}', '{state}', '{labels}', '{sort}', '{direction}', '{since}', '{per_page}', '{page}'), array($this->org, $this->filter, $this->state, $this->labels, $this->sort, $this->direction, $this->since, $this->per_page, $this->page), '/orgs/{org}/issues?filter={filter}&state={state}&labels={labels}&sort={sort}&direction={direction}&since={since}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
