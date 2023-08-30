<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Actions;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\ActionsCacheList;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetActionsCacheList
{
    public const OPERATION_ID    = 'actions/get-actions-cache-list';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/caches';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Caches $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, string $ref, string $key, int $perPage = 30, int $page = 1, string $sort = 'last_accessed_at', string $direction = 'desc'): ActionsCacheList|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Actions\GetActionsCacheList($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ref, $key, $perPage, $page, $sort, $direction);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsCacheList|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
