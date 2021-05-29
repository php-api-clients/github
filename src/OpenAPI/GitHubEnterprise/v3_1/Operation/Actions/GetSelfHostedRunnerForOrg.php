<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetSelfHostedRunnerForOrg
{
    private const OPERATION_ID = 'actions/get-self-hosted-runner-for-org';
    public string $org;
    /**Unique identifier of the self-hosted runner.**/
    public int $runner_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $runner_id)
    {
        $this->org       = $org;
        $this->runner_id = $runner_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{runner_id}'], [$this->org, $this->runner_id], '/orgs/{org}/actions/runners/{runner_id}?'));
    }

    function validateResponse(): void
    {
    }
}
