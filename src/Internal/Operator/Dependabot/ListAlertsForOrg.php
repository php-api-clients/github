<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Dependabot;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListAlertsForOrg
{
    public const OPERATION_ID    = 'dependabot/list-alerts-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/dependabot/alerts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Dependabot\Alerts $hydrator)
    {
    }

    /** @return Observable<Schema\DependabotAlertWithRepository>|array{code:int} */
    public function call(string $org, string $state, string $severity, string $ecosystem, string $package, string $scope, string $before, string $after, int $last, string $sort = 'created', string $direction = 'desc', int $first = 30, int $perPage = 30): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Dependabot\ListAlertsForOrg($this->responseSchemaValidator, $this->hydrator, $org, $state, $severity, $ecosystem, $package, $scope, $before, $after, $last, $sort, $direction, $first, $perPage);
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
