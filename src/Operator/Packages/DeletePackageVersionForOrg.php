<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Packages;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeletePackageVersionForOrg
{
    public const OPERATION_ID    = 'packages/delete-package-version-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(string $packageType, string $packageName, string $org, int $packageVersionId): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Packages\DeletePackageVersionForOrg($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName, $org, $packageVersionId);
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
