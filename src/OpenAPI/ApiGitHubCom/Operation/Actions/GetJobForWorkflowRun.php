<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetJobForWorkflowRun
{
    private const OPERATION_ID = 'actions/get-job-for-workflow-run';
    public string $owner;
    public string $repo;
    /**job_id parameter**/
    public int $job_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $job_id)
    {
        $this->owner  = $owner;
        $this->repo   = $repo;
        $this->job_id = $job_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{job_id}'], [$this->owner, $this->repo, $this->job_id], '/repos/{owner}/{repo}/actions/jobs/{job_id}?'));
    }

    function validateResponse(): void
    {
    }
}
