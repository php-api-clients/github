<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Dependabot;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListAlertsForEnterprise
{
    public const OPERATION_ID    = 'dependabot/list-alerts-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/dependabot/alerts';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprises/{enterprise}/dependabot/alerts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprises\Enterprise\Dependabot\Alerts $hydrator)
    {
    }

    /** @return (iterable<Schema\DependabotAlertWithRepository> | array{code: int}) */
    public function call(string $enterprise, string $state, string $severity, string $ecosystem, string $package, string $scope, string $before, string $after, int $last, string $sort = 'created', string $direction = 'desc', int $first = 30, int $perPage = 30): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Dependabot\ListAlertsForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise, $state, $severity, $ecosystem, $package, $scope, $before, $after, $last, $sort, $direction, $first, $perPage);
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
