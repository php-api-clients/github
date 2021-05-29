<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteSelfHostedRunnerFromRepo
{
    private const OPERATION_ID = 'actions/delete-self-hosted-runner-from-repo';
    public string $owner;
    public string $repo;
    /**Unique identifier of the self-hosted runner.**/
    public int $runner_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $runner_id)
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->runner_id = $runner_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{owner}', '{repo}', '{runner_id}'], [$this->owner, $this->repo, $this->runner_id], '/repos/{owner}/{repo}/actions/runners/{runner_id}?'));
    }

    function validateResponse(): void
    {
    }
}
