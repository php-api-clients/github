<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Packages;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Package;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetPackageForUser
{
    public const OPERATION_ID    = 'packages/get-package-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/packages/{package_type}/{package_name}';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/packages/{package_type}/{package_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Users\Username\Packages\PackageType\PackageName $hydrator)
    {
    }

    /** @return */
    public function call(string $packageType, string $packageName, string $username): Package|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Packages\GetPackageForUser($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName, $username);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Package|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
