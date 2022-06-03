<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues;

final class List_
{
    private const OPERATION_ID = 'issues/list';
    /**Indicates which sorts of issues to return. Can be one of:  
    \* `assigned`: Issues assigned to you  
    \* `created`: Issues created by you  
    \* `mentioned`: Issues mentioning you  
    \* `subscribed`: Issues you're subscribed to updates for  
    \* `all` or `repos`: All issues the authenticated user can see, regardless of participation or creation**/
    public string $filter;
    /**Indicates the state of the issues to return. Can be either `open`, `closed`, or `all`.**/
    public string $state;
    /**A list of comma separated label names. Example: `bug,ui,@high`**/
    public string $labels;
    /**What to sort results by. Can be either `created`, `updated`, `comments`.**/
    public string $sort;
    /**One of `asc` (ascending) or `desc` (descending).**/
    public string $direction;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    public string $since;
    /****/
    public bool $collab;
    /****/
    public bool $orgs;
    /****/
    public bool $owned;
    /****/
    public bool $pulls;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $filter = 'assigned', string $state = 'open', $labels, string $sort = 'created', string $direction = 'desc', $since, $collab, $orgs, $owned, $pulls, int $per_page = 30, int $page = 1)
    {
        $this->filter = $filter;
        $this->state = $state;
        $this->labels = $labels;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->since = $since;
        $this->collab = $collab;
        $this->orgs = $orgs;
        $this->owned = $owned;
        $this->pulls = $pulls;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{filter}', '{state}', '{labels}', '{sort}', '{direction}', '{since}', '{collab}', '{orgs}', '{owned}', '{pulls}', '{per_page}', '{page}'), array($this->filter, $this->state, $this->labels, $this->sort, $this->direction, $this->since, $this->collab, $this->orgs, $this->owned, $this->pulls, $this->per_page, $this->page), '/issues?filter={filter}&state={state}&labels={labels}&sort={sort}&direction={direction}&since={since}&collab={collab}&orgs={orgs}&owned={owned}&pulls={pulls}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
