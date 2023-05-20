<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Apps;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListAccountsForPlanStubbed
{
    public const OPERATION_ID    = 'apps/list-accounts-for-plan-stubbed';
    public const OPERATION_MATCH = 'GET /marketplace_listing/stubbed/plans/{plan_id}/accounts';
    private const METHOD         = 'GET';
    private const PATH           = '/marketplace_listing/stubbed/plans/{plan_id}/accounts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\MarketplaceListing\Stubbed\Plans\PlanId\Accounts $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(int $planId, string $direction, string $sort = 'created', int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Apps\ListAccountsForPlanStubbed($this->responseSchemaValidator, $this->hydrator, $planId, $direction, $sort, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
