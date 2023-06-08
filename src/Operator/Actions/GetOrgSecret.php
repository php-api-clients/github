<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\OrganizationActionsSecret;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetOrgSecret
{
    public const OPERATION_ID    = 'actions/get-org-secret';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/secrets/{secret_name}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/secrets/{secret_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName $hydrator)
    {
    }

    /**
     * @return PromiseInterface<OrganizationActionsSecret>
     **/
    public function call(string $org, string $secretName): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\GetOrgSecret($this->responseSchemaValidator, $this->hydrator, $org, $secretName);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrganizationActionsSecret {
            return $operation->createResponse($response);
        });
    }
}