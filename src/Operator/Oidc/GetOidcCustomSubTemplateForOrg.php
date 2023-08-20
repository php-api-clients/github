<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Oidc;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\OidcCustomSub;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetOidcCustomSubTemplateForOrg
{
    public const OPERATION_ID    = 'oidc/get-oidc-custom-sub-template-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/oidc/customization/sub';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/oidc/customization/sub';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Oidc\Customization\Sub $hydrator)
    {
    }

    /** @return */
    public function call(string $org): OidcCustomSub|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Oidc\GetOidcCustomSubTemplateForOrg($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OidcCustomSub|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
