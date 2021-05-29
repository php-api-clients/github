<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetWorkflowRunUsage
{
    private const OPERATION_ID = 'actions/get-workflow-run-usage';
    public string $owner;
    public string $repo;
    /**The id of the workflow run.**/
    public int $run_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $run_id)
    {
        $this->owner  = $owner;
        $this->repo   = $repo;
        $this->run_id = $run_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{run_id}'], [$this->owner, $this->repo, $this->run_id], '/repos/{owner}/{repo}/actions/runs/{run_id}/timing?'));
    }

    function validateResponse(): void
    {
    }
}
