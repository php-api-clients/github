<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Billing;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\ActionsBillingUsage;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetGithubActionsBillingUser
{
    public const OPERATION_ID    = 'billing/get-github-actions-billing-user';
    public const OPERATION_MATCH = 'GET /users/{username}/settings/billing/actions';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/settings/billing/actions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Users\Username\Settings\Billing\Actions $hydrator)
    {
    }

    /**
     * @return PromiseInterface<ActionsBillingUsage>
     **/
    public function call(string $username): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Billing\GetGithubActionsBillingUser($this->responseSchemaValidator, $this->hydrator, $username);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsBillingUsage {
            return $operation->createResponse($response);
        });
    }
}
