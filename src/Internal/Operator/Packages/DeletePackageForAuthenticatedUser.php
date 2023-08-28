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

final readonly class DeletePackageForAuthenticatedUser
{
    public const OPERATION_ID    = 'packages/delete-package-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/packages/{package_type}/{package_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\Packages\PackageType\PackageName $hydrator)
    {
    }

    /** @return array{code:int} */
    public function call(string $packageType, string $packageName): array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Packages\DeletePackageForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $packageType, $packageName);
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
