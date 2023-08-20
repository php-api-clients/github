<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Billing;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\ActionsBillingUsage;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetGithubActionsBillingOrg
{
    public const OPERATION_ID    = 'billing/get-github-actions-billing-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/settings/billing/actions';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/settings/billing/actions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Settings\Billing\Actions $hydrator)
    {
    }

    /** @return */
    public function call(string $org): ActionsBillingUsage|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Billing\GetGithubActionsBillingOrg($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsBillingUsage|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
