<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListWorkflowRunsForRepo
{
    private const OPERATION_ID = 'actions/list-workflow-runs-for-repo';
    public string $owner;
    public string $repo;
    /**Returns someone's workflow runs. Use the login for the user who created the `push` associated with the check suite or workflow run.**/
    public string $actor;
    /**Returns workflow runs associated with a branch. Use the name of the branch of the `push`.**/
    public string $branch;
    /**Returns workflow run triggered by the event you specify. For example, `push`, `pull_request` or `issue`. For more information, see "[Events that trigger workflows](https://help.github.com/en/actions/automating-your-workflow-with-github-actions/events-that-trigger-workflows)."**/
    public string $event;
    /**Returns workflow runs with the check run `status` or `conclusion` that you specify. For example, a conclusion can be `success` or a status can be `in_progress`. Only GitHub can set a status of `waiting` or `requested`. For a list of the possible `status` and `conclusion` options, see "[Create a check run](https://docs.github.com/enterprise-server@2.22/rest/reference/checks#create-a-check-run)."**/
    public string $status;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $actor, $branch, $event, $status, int $per_page = 30, int $page = 1)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->actor    = $actor;
        $this->branch   = $branch;
        $this->event    = $event;
        $this->status   = $status;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{actor}', '{branch}', '{event}', '{status}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->actor, $this->branch, $this->event, $this->status, $this->per_page, $this->page], '/repos/{owner}/{repo}/actions/runs?actor={actor}&branch={branch}&event={event}&status={status}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
