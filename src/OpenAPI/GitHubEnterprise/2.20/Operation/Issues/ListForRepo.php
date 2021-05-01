<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Issues;

final class ListForRepo
{
    private const OPERATION_ID = 'issues/list-for-repo';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**If an `integer` is passed, it should refer to a milestone by its `number` field. If the string `*` is passed, issues with any milestone are accepted. If the string `none` is passed, issues without milestones are returned.**/
    public string $milestone;
    /**Indicates the state of the issues to return. Can be either `open`, `closed`, or `all`.**/
    public string $state;
    /**Can be the name of a user. Pass in `none` for issues with no assigned user, and `*` for issues assigned to any user.**/
    public string $assignee;
    /**The user that created the issue.**/
    public string $creator;
    /**A user that's mentioned in the issue.**/
    public string $mentioned;
    /**A list of comma separated label names. Example: `bug,ui,@high`**/
    public string $labels;
    /**What to sort results by. Can be either `created`, `updated`, `comments`.**/
    public string $sort;
    /**One of `asc` (ascending) or `desc` (descending).**/
    public string $direction;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    public string $since;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $milestone, string $state = 'open', $assignee, $creator, $mentioned, $labels, string $sort = 'created', string $direction = 'desc', $since, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->milestone = $milestone;
        $this->state = $state;
        $this->assignee = $assignee;
        $this->creator = $creator;
        $this->mentioned = $mentioned;
        $this->labels = $labels;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->since = $since;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{milestone}', '{state}', '{assignee}', '{creator}', '{mentioned}', '{labels}', '{sort}', '{direction}', '{since}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->milestone, $this->state, $this->assignee, $this->creator, $this->mentioned, $this->labels, $this->sort, $this->direction, $this->since, $this->per_page, $this->page), '/repos/{owner}/{repo}/issues?milestone={milestone}&state={state}&assignee={assignee}&creator={creator}&mentioned={mentioned}&labels={labels}&sort={sort}&direction={direction}&since={since}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
