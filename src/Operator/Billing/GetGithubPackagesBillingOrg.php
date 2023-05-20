<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Billing;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\PackagesBillingUsage;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetGithubPackagesBillingOrg
{
    public const OPERATION_ID    = 'billing/get-github-packages-billing-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/settings/billing/packages';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/settings/billing/packages';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Settings\Billing\Packages $hydrator)
    {
    }

    /**
     * @return PromiseInterface<PackagesBillingUsage>
     **/
    public function call(string $org): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Billing\GetGithubPackagesBillingOrg($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PackagesBillingUsage {
            return $operation->createResponse($response);
        });
    }
}
