<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Repos;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CommitComparison;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CompareCommits
{
    public const OPERATION_ID    = 'repos/compare-commits';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/compare/{basehead}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead $hydrator)
    {
    }

    /** @return Schema\CommitComparison */
    public function call(string $owner, string $repo, string $basehead, int $page = 1, int $perPage = 30): CommitComparison|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Repos\CompareCommits($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $basehead, $page, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CommitComparison|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
