<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Packages;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RestorePackageVersionForUser
{
    public const OPERATION_ID    = 'packages/restore-package-version-for-user';
    public const OPERATION_MATCH = 'POST /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore';
    private const METHOD         = 'POST';
    private const PATH           = '/users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(string $packageType, string $packageName, string $username, int $packageVersionId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Packages\RestorePackageVersionForUser($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName, $username, $packageVersionId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
