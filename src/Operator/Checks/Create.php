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

final readonly class Create
{
    public const OPERATION_ID    = 'checks/create';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/check-runs';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/check-runs';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\CheckRuns $hydrator)
    {
    }

    /**
     * @return PromiseInterface<CheckRun>
     **/
    public function call(string $owner, string $repo, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Checks\Create($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CheckRun {
            return $operation->createResponse($response);
        });
    }
}
