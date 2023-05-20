<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\SecurityAdvisories;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListRepositoryAdvisories
{
    public const OPERATION_ID    = 'security-advisories/list-repository-advisories';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/security-advisories';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/security-advisories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(string $owner, string $repo, string $before, string $after, string $state, string $direction = 'desc', string $sort = 'created', int $perPage = 30): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\SecurityAdvisories\ListRepositoryAdvisories($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $before, $after, $state, $direction, $sort, $perPage);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
