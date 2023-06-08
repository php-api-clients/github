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

final readonly class ReRunWorkflowFailedJobs
{
    public const OPERATION_ID    = 'actions/re-run-workflow-failed-jobs';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun-failed-jobs';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/actions/runs/{run_id}/rerun-failed-jobs';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\RerunFailedJobs $hydrator)
    {
    }

    /**
     * @return PromiseInterface<EmptyObject>
     **/
    public function call(string $owner, string $repo, int $runId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\ReRunWorkflowFailedJobs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $runId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EmptyObject {
            return $operation->createResponse($response);
        });
    }
}