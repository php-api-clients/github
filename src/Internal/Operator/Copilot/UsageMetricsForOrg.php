<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Copilot;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UsageMetricsForOrg
{
    public const OPERATION_ID    = 'copilot/usage-metrics-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/copilot/usage';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Copilot\Usage $hydrator)
    {
    }

    /** @return iterable<int,Schema\CopilotUsageMetrics> */
    public function call(string $org, string $since, string $until, int $page = 1, int $perPage = 28): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Copilot\UsageMetricsForOrg($this->responseSchemaValidator, $this->hydrator, $org, $since, $until, $page, $perPage);
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
