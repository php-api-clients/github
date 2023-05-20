<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\ActionsCacheUsageOrgEnterprise;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetActionsCacheUsageForOrg
{
    public const OPERATION_ID    = 'actions/get-actions-cache-usage-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/cache/usage';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/cache/usage';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Cache\Usage $hydrator)
    {
    }

    /**
     * @return PromiseInterface<ActionsCacheUsageOrgEnterprise>
     **/
    public function call(string $org): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\GetActionsCacheUsageForOrg($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsCacheUsageOrgEnterprise {
            return $operation->createResponse($response);
        });
    }
}
