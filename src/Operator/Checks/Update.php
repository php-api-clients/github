<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Checks;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\CheckRun;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class Update
{
    public const OPERATION_ID    = 'checks/update';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/check-runs/{check_run_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repos/{owner}/{repo}/check-runs/{check_run_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<CheckRun>
     **/
    public function call(string $owner, string $repo, int $checkRunId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Checks\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $checkRunId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CheckRun {
            return $operation->createResponse($response);
        });
    }
}
