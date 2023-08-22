<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListPullRequestsAssociatedWithCommit
{
    public const OPERATION_ID    = 'repos/list-pull-requests-associated-with-commit';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/commits/{commit_sha}/pulls';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/commits/{commit_sha}/pulls';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls $hydrator)
    {
    }

    /** @return Observable<Schema\PullRequestSimple> */
    public function call(string $owner, string $repo, string $commitSha, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\ListPullRequestsAssociatedWithCommit($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $commitSha, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
