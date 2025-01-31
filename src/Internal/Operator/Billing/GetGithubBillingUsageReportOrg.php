<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Billing;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\BillingUsageReport;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetGithubBillingUsageReportOrg
{
    public const OPERATION_ID    = 'billing/get-github-billing-usage-report-org';
    public const OPERATION_MATCH = 'GET /organizations/{org}/settings/billing/usage';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Organizations\Org\Settings\Billing\Usage $hydrator)
    {
    }

    public function call(string $org, int $year, int $month, int $day, int $hour): BillingUsageReport
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Billing\GetGithubBillingUsageReportOrg($this->responseSchemaValidator, $this->hydrator, $org, $year, $month, $day, $hour);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): BillingUsageReport {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
