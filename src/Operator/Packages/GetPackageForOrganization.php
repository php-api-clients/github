<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Packages;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Package;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetPackageForOrganization
{
    public const OPERATION_ID    = 'packages/get-package-for-organization';
    public const OPERATION_MATCH = 'GET /orgs/{org}/packages/{package_type}/{package_name}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/packages/{package_type}/{package_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Package>
     **/
    public function call(string $packageType, string $packageName, string $org): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Packages\GetPackageForOrganization($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName, $org);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Package {
            return $operation->createResponse($response);
        });
    }
}