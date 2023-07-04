<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Packages;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeletePackageVersionForAuthenticatedUser
{
    public const OPERATION_ID    = 'packages/delete-package-version-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/packages/{package_type}/{package_name}/versions/{package_version_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/user/packages/{package_type}/{package_name}/versions/{package_version_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(string $packageType, string $packageName, int $packageVersionId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Packages\DeletePackageVersionForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName, $packageVersionId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
