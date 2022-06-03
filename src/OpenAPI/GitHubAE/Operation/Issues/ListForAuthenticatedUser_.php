<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues;

final class ListForAuthenticatedUser_
{
    private const OPERATION_ID = 'issues/list-for-authenticated-user';
    /**Indicates which sorts of issues to return. `assigned` means issues assigned to you. `created` means issues created by you. `mentioned` means issues mentioning you. `subscribed` means issues you're subscribed to updates for. `all` or `repos` means all issues you can see, regardless of participation or creation.**/
    public string $filter;
    /**Indicates the state of the issues to return. Can be either `open`, `closed`, or `all`.**/
    public string $state;
    /**A list of comma separated label names. Example: `bug,ui,@high`**/
    public string $labels;
    /**What to sort results by. Can be either `created`, `updated`, `comments`.**/
    public string $sort;
    /**The direction to sort the results by.**/
    public string $direction;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    public string $since;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $filter = 'assigned', string $state = 'open', $labels, string $sort = 'created', string $direction = 'desc', $since, int $per_page = 30, int $page = 1)
    {
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{filter}', '{state}', '{labels}', '{sort}', '{direction}', '{since}', '{per_page}', '{page}'), array($this->filter, $this->state, $this->labels, $this->sort, $this->direction, $this->since, $this->per_page, $this->page), '/user/issues?filter={filter}&state={state}&labels={labels}&sort={sort}&direction={direction}&since={since}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
