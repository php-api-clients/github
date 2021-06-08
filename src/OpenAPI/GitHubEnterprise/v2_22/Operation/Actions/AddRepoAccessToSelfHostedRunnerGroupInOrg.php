<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class AddRepoAccessToSelfHostedRunnerGroupInOrg
{
    private const OPERATION_ID = 'actions/add-repo-access-to-self-hosted-runner-group-in-org';
    public string $org;
    /**Unique identifier of the self-hosted runner group.**/
    public int $runner_group_id;
    public int $repository_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $runner_group_id, $repository_id)
    {
        $this->org             = $org;
        $this->runner_group_id = $runner_group_id;
        $this->repository_id   = $repository_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{org}', '{runner_group_id}', '{repository_id}'], [$this->org, $this->runner_group_id, $this->repository_id], '/orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}?'));
    }

    function validateResponse(): void
    {
    }
}
