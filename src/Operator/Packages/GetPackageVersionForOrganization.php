<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Packages;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\PackageVersion;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetPackageVersionForOrganization
{
    public const OPERATION_ID    = 'packages/get-package-version-for-organization';
    public const OPERATION_MATCH = 'GET /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<PackageVersion>
     **/
    public function call(string $packageType, string $packageName, string $org, int $packageVersionId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Packages\GetPackageVersionForOrganization($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName, $org, $packageVersionId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PackageVersion {
            return $operation->createResponse($response);
        });
    }
}
