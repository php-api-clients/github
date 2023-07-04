<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Packages;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetAllPackageVersionsForPackageOwnedByOrg
{
    public const OPERATION_ID    = 'packages/get-all-package-versions-for-package-owned-by-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/packages/{package_type}/{package_name}/versions';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/packages/{package_type}/{package_name}/versions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions $hydrator)
    {
    }

    /** @return PromiseInterface<mixed> **/
    public function call(string $packageType, string $packageName, string $org, int $page = 1, int $perPage = 30, string $state = 'active'): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName, $org, $page, $perPage, $state);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
