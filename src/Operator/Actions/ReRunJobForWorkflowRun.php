<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ReRunJobForWorkflowRun
{
    public const OPERATION_ID    = 'actions/re-run-job-for-workflow-run';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/actions/jobs/{job_id}/rerun';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/actions/jobs/{job_id}/rerun';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Rerun $hydrator)
    {
    }

    /** @return PromiseInterface<EmptyObject> **/
    public function call(string $owner, string $repo, int $jobId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\ReRunJobForWorkflowRun($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $jobId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EmptyObject {
            return $operation->createResponse($response);
        });
    }
}
