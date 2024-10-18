<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class AddSelfHostedRunnerToGroupForOrg
{
    public const OPERATION_ID    = 'actions/add-self-hosted-runner-to-group-for-org';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**Unique identifier of the self-hosted runner group. **/
    private int $runnerGroupId;
    /**Unique identifier of the self-hosted runner. **/
    private int $runnerId;

    public function __construct(string $org, int $runnerGroupId, int $runnerId)
    {
        $this->org           = $org;
        $this->runnerGroupId = $runnerGroupId;
        $this->runnerId      = $runnerId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('PUT', str_replace(['{org}', '{runner_group_id}', '{runner_id}'], [$this->org, $this->runnerGroupId, $this->runnerId], '/orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
