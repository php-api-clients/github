<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetDeploymentStatus
{
    private const OPERATION_ID = 'repos/get-deployment-status';
    public string $owner;
    public string $repo;
    /**deployment_id parameter**/
    public int $deployment_id;
    public int $status_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $deployment_id, $status_id)
    {
        $this->owner         = $owner;
        $this->repo          = $repo;
        $this->deployment_id = $deployment_id;
        $this->status_id     = $status_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{deployment_id}', '{status_id}'], [$this->owner, $this->repo, $this->deployment_id, $this->status_id], '/repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}?'));
    }

    function validateResponse(): void
    {
    }
}
