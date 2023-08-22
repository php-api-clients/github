<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Activity;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\Stargazer;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListStargazersForRepo
{
    public const OPERATION_ID    = 'activity/list-stargazers-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/stargazers';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/stargazers';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Stargazers $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, int $perPage = 30, int $page = 1): SimpleUser|Stargazer|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Activity\ListStargazersForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): SimpleUser|Stargazer|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
