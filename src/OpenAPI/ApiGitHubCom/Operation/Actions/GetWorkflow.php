<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetWorkflow
{
    private const OPERATION_ID = 'actions/get-workflow';
    public string $owner;
    public string $repo;
    /**The ID of the workflow. You can also pass the workflow file name as a string.**/
    public $workflow_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $workflow_id)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->workflow_id = $workflow_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{workflow_id}'], [$this->owner, $this->repo, $this->workflow_id], '/repos/{owner}/{repo}/actions/workflows/{workflow_id}?'));
    }

    function validateResponse(): void
    {
    }
}
