<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Billing;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\PackagesBillingUsage;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetGithubPackagesBillingUser
{
    public const OPERATION_ID    = 'billing/get-github-packages-billing-user';
    public const OPERATION_MATCH = 'GET /users/{username}/settings/billing/packages';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Users\Username\Settings\Billing\Packages $hydrator)
    {
    }

    /** @return */
    public function call(string $username): PackagesBillingUsage|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Billing\GetGithubPackagesBillingUser($this->responseSchemaValidator, $this->hydrator, $username);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PackagesBillingUsage|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
