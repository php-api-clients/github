<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetDeployment
{
    private const OPERATION_ID = 'repos/get-deployment';
    public string $owner;
    public string $repo;
    /**deployment_id parameter**/
    public int $deployment_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $deployment_id)
    {
        $this->owner         = $owner;
        $this->repo          = $repo;
        $this->deployment_id = $deployment_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{deployment_id}'], [$this->owner, $this->repo, $this->deployment_id], '/repos/{owner}/{repo}/deployments/{deployment_id}?'));
    }

    function validateResponse(): void
    {
    }
}