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

final readonly class CancelWorkflowRun
{
    public const OPERATION_ID    = 'actions/cancel-workflow-run';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/cancel';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/actions/runs/{run_id}/cancel';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Cancel $hydrator)
    {
    }

    /**
     * @return PromiseInterface<EmptyObject>
     **/
    public function call(string $owner, string $repo, int $runId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\CancelWorkflowRun($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $runId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EmptyObject {
            return $operation->createResponse($response);
        });
    }
}
