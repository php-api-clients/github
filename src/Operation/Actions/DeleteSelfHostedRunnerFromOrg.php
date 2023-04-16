<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteSelfHostedRunnerFromOrg
{
    public const OPERATION_ID    = 'actions/delete-self-hosted-runner-from-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/runners/{runner_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/actions/runners/{runner_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Unique identifier of the self-hosted runner.**/
    private int $runnerId;

    public function __construct(string $org, int $runnerId)
    {
        $this->org      = $org;
        $this->runnerId = $runnerId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{runner_id}'], [$this->org, $this->runnerId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
