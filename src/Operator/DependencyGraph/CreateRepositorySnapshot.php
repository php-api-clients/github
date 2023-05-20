<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\DependencyGraph;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\DependencyGraph\CreateRepositorySnapshot\Response\ApplicationJson\Created;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateRepositorySnapshot
{
    public const OPERATION_ID    = 'dependency-graph/create-repository-snapshot';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/dependency-graph/snapshots';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/dependency-graph/snapshots';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Snapshots $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Created>
     **/
    public function call(string $owner, string $repo, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\DependencyGraph\CreateRepositorySnapshot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Created {
            return $operation->createResponse($response);
        });
    }
}
