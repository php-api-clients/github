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

final readonly class RestorePackageForOrg
{
    public const OPERATION_ID    = 'packages/restore-package-for-org';
    public const OPERATION_MATCH = 'POST /orgs/{org}/packages/{package_type}/{package_name}/restore';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/packages/{package_type}/{package_name}/restore';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Restore $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(string $packageType, string $packageName, string $org, string $token): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Packages\RestorePackageForOrg($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName, $org, $token);
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
