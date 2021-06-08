<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveSelfHostedRunnerFromGroupForOrg
{
    private const OPERATION_ID = 'actions/remove-self-hosted-runner-from-group-for-org';
    public string $org;
    /**Unique identifier of the self-hosted runner group.**/
    public int $runner_group_id;
    /**Unique identifier of the self-hosted runner.**/
    public int $runner_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $runner_group_id, $runner_id)
    {
        $this->org             = $org;
        $this->runner_group_id = $runner_group_id;
        $this->runner_id       = $runner_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{org}', '{runner_group_id}', '{runner_id}'], [$this->org, $this->runner_group_id, $this->runner_id], '/orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}?'));
    }

    function validateResponse(): void
    {
    }
}
