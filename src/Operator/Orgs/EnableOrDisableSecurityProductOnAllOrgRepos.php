<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class EnableOrDisableSecurityProductOnAllOrgRepos
{
    public const OPERATION_ID    = 'orgs/enable-or-disable-security-product-on-all-org-repos';
    public const OPERATION_MATCH = 'POST /orgs/{org}/{security_product}/{enablement}';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/{security_product}/{enablement}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(string $org, string $securityProduct, string $enablement, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos($this->requestSchemaValidator, $org, $securityProduct, $enablement);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
