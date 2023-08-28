<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Billing;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CombinedBillingUsage;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetSharedStorageBillingOrg
{
    public const OPERATION_ID    = 'billing/get-shared-storage-billing-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/settings/billing/shared-storage';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\SharedStorage $hydrator)
    {
    }

    /** @return Schema\CombinedBillingUsage */
    public function call(string $org): CombinedBillingUsage|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Billing\GetSharedStorageBillingOrg($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CombinedBillingUsage|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
