<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\DependencyGraph;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DiffRange
{
    public const OPERATION_ID    = 'dependency-graph/diff-range';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependency-graph/compare/{basehead}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/dependency-graph/compare/{basehead}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Compare\Basehead $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(string $owner, string $repo, string $basehead, string $name): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\DependencyGraph\DiffRange($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $basehead, $name);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
