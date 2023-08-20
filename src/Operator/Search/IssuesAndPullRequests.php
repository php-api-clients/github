<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Search;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class IssuesAndPullRequests
{
    public const OPERATION_ID    = 'search/issues-and-pull-requests';
    public const OPERATION_MATCH = 'GET /search/issues';
    private const METHOD         = 'GET';
    private const PATH           = '/search/issues';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Search\Issues $hydrator)
    {
    }

    /** @return (Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok | array{code: int}) */
    public function call(string $q, string $sort, string $order = 'desc', int $perPage = 30, int $page = 1): Ok|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Search\IssuesAndPullRequests($this->responseSchemaValidator, $this->hydrator, $q, $sort, $order, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
