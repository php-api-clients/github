<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;
use Rx\Observable;

final readonly class DownloadJobLogsForWorkflowRunStreaming
{
    public const OPERATION_ID    = 'actions/download-job-logs-for-workflow-run';
    public const OPERATION_MATCH = 'STREAM /repos/{owner}/{repo}/actions/jobs/{job_id}/logs';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/jobs/{job_id}/logs';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<Observable>
     **/
    public function call(string $owner, string $repo, int $jobId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\DownloadJobLogsForWorkflowRunStreaming($this->browser, $owner, $repo, $jobId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }
}
