<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Checks;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RerequestRun
{
    public const OPERATION_ID    = 'checks/rerequest-run';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/check-runs/{check_run_id}/rerequest';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/check-runs/{check_run_id}/rerequest';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Rerequest $hydrator)
    {
    }

    /**
     * @return PromiseInterface<EmptyObject>
     **/
    public function call(string $owner, string $repo, int $checkRunId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Checks\RerequestRun($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $checkRunId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EmptyObject {
            return $operation->createResponse($response);
        });
    }
}