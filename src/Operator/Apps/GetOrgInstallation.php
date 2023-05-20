<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Apps;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Installation;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetOrgInstallation
{
    public const OPERATION_ID    = 'apps/get-org-installation';
    public const OPERATION_MATCH = 'GET /orgs/{org}/installation';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/installation';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Installation $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Installation>
     **/
    public function call(string $org): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Apps\GetOrgInstallation($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Installation {
            return $operation->createResponse($response);
        });
    }
}
