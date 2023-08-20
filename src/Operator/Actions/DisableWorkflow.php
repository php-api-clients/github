<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DisableWorkflow
{
    public const OPERATION_ID    = 'actions/disable-workflow';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable';
    private const METHOD         = 'PUT';
    private const PATH           = '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int} */
    public function call(string $owner, string $repo, $workflowId): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\DisableWorkflow($owner, $repo, $workflowId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
