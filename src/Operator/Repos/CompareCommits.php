<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\CommitComparison;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CompareCommits
{
    public const OPERATION_ID    = 'repos/compare-commits';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/compare/{basehead}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/compare/{basehead}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead $hydrator)
    {
    }

    /**
     * @return PromiseInterface<CommitComparison>
     **/
    public function call(string $owner, string $repo, string $basehead, int $page = 1, int $perPage = 30): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\CompareCommits($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $basehead, $page, $perPage);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CommitComparison {
            return $operation->createResponse($response);
        });
    }
}
