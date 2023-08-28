<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Packages;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RestorePackageVersionForOrg
{
    public const OPERATION_ID    = 'packages/restore-package-version-for-org';
    public const OPERATION_MATCH = 'POST /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore $hydrator)
    {
    }

    /** @return array{code:int} */
    public function call(string $packageType, string $packageName, string $org, int $packageVersionId): array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Packages\RestorePackageVersionForOrg($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName, $org, $packageVersionId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
