<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ReviewPendingDeploymentsForRun
{
    public const OPERATION_ID    = 'actions/review-pending-deployments-for-run';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator)
    {
    }

    /**
     * @return PromiseInterface<ResponseInterface>
     **/
    public function call(string $owner, string $repo, int $runId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\ReviewPendingDeploymentsForRun($this->requestSchemaValidator, $owner, $repo, $runId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }
}
