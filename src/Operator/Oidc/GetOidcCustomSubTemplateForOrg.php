<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Oidc;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\OidcCustomSub;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetOidcCustomSubTemplateForOrg
{
    public const OPERATION_ID    = 'oidc/get-oidc-custom-sub-template-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/oidc/customization/sub';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/oidc/customization/sub';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Oidc\Customization\Sub $hydrator)
    {
    }

    /** @return PromiseInterface<OidcCustomSub> **/
    public function call(string $org): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Oidc\GetOidcCustomSubTemplateForOrg($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OidcCustomSub {
            return $operation->createResponse($response);
        });
    }
}
