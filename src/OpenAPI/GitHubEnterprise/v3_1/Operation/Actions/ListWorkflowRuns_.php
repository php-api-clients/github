<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions;

final class ListWorkflowRuns_
{
    private const OPERATION_ID = 'actions/list-workflow-runs';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The ID of the workflow. You can also pass the workflow file name as a string.**/
    public $workflow_id;
    /**Returns someone's workflow runs. Use the login for the user who created the `push` associated with the check suite or workflow run.**/
    public string $actor;
    /**Returns workflow runs associated with a branch. Use the name of the branch of the `push`.**/
    public string $branch;
    /**Returns workflow run triggered by the event you specify. For example, `push`, `pull_request` or `issue`. For more information, see "[Events that trigger workflows](https://docs.github.com/en/actions/automating-your-workflow-with-github-actions/events-that-trigger-workflows)."**/
    public string $event;
    /**Returns workflow runs with the check run `status` or `conclusion` that you specify. For example, a conclusion can be `success` or a status can be `in_progress`. Only GitHub can set a status of `waiting` or `requested`. For a list of the possible `status` and `conclusion` options, see "[Create a check run](https://docs.github.com/enterprise-server@3.1/rest/reference/checks#create-a-check-run)."**/
    public string $status;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Returns workflow runs created within the given date-time range. For more information on the syntax, see "[Understanding the search syntax](https://docs.github.com/enterprise-server@3.1/search-github/getting-started-with-searching-on-github/understanding-the-search-syntax#query-for-dates)."**/
    public string $created;
    /**If `true` pull requests are omitted from the response (empty array).**/
    public bool $exclude_pull_requests;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $workflow_id, $actor, $branch, $event, $status, int $per_page = 30, int $page = 1, $created, bool $exclude_pull_requests = false)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->workflow_id = $workflow_id;
        $this->actor = $actor;
        $this->branch = $branch;
        $this->event = $event;
        $this->status = $status;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->created = $created;
        $this->exclude_pull_requests = $exclude_pull_requests;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{workflow_id}', '{actor}', '{branch}', '{event}', '{status}', '{per_page}', '{page}', '{created}', '{exclude_pull_requests}'), array($this->owner, $this->repo, $this->workflow_id, $this->actor, $this->branch, $this->event, $this->status, $this->per_page, $this->page, $this->created, $this->exclude_pull_requests), '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs?actor={actor}&branch={branch}&event={event}&status={status}&per_page={per_page}&page={page}&created={created}&exclude_pull_requests={exclude_pull_requests}'));
    }
    function validateResponse()
    {
    }
}
