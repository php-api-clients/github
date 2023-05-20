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

final readonly class GetPackageForAuthenticatedUser
{
    public const OPERATION_ID    = 'packages/get-package-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/packages/{package_type}/{package_name}';
    private const METHOD         = 'GET';
    private const PATH           = '/user/packages/{package_type}/{package_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Packages\PackageType\PackageName $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Package>
     **/
    public function call(string $packageType, string $packageName): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Packages\GetPackageForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Package {
            return $operation->createResponse($response);
        });
    }
}
