<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\ApiInsights;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetUserStatsListing
{
    public const OPERATION_ID    = 'api-insights/get-user-stats';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/insights/api/user-stats/{user_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Insights\Api\UserStats\UserId $hydrator)
    {
    }

    /** @return Observable<Schema\ApiInsightsUserStats> */
    public function call(string $org, string $userId, string $minTimestamp, string $maxTimestamp, array $sort, string $actorNameSubstring, int $page = 1, int $perPage = 30, string $direction = 'desc'): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\ApiInsights\GetUserStatsListing($this->responseSchemaValidator, $this->hydrator, $org, $userId, $minTimestamp, $maxTimestamp, $sort, $actorNameSubstring, $page, $perPage, $direction);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
