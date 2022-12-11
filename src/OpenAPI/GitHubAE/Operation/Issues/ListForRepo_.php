<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues;

final class ListForRepo_
{
    private const OPERATION_ID = 'issues/list-for-repo';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**If an `integer` is passed, it should refer to a milestone by its `number` field. If the string `*` is passed, issues with any milestone are accepted. If the string `none` is passed, issues without milestones are returned.**/
    private readonly string $milestone;
    /**Indicates the state of the issues to return.**/
    private readonly string $state;
    /**Can be the name of a user. Pass in `none` for issues with no assigned user, and `*` for issues assigned to any user.**/
    private readonly string $assignee;
    /**The user that created the issue.**/
    private readonly string $creator;
    /**A user that's mentioned in the issue.**/
    private readonly string $mentioned;
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
    function __construct(string $owner, string $repo, string $milestone, string $state = 'open', string $assignee, string $creator, string $mentioned, string $labels, string $sort = 'created', string $direction = 'desc', string $since, int $per_page = 30, int $page = 1)
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
