<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Checks;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListForRef
{
    public const OPERATION_ID    = 'checks/list-for-ref';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/commits/{ref}/check-runs';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns $hydrator)
    {
    }

    public function call(string $owner, string $repo, string $ref, string $checkName, string $status, int $appId, string $filter = 'latest', int $perPage = 30, int $page = 1): Json
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Checks\ListForRef($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ref, $checkName, $status, $appId, $filter, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Json {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
