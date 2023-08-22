<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Packages;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListPackagesForUserListing
{
    public const OPERATION_ID    = 'packages/list-packages-for-user';
    public const OPERATION_MATCH = 'LIST /users/{username}/packages';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/packages';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Users\Username\Packages $hydrator)
    {
    }

    /** @return (iterable<Schema\Package> | array{code: int}) */
    public function call(string $packageType, string $visibility, string $username, int $page = 1, int $perPage = 30): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Packages\ListPackagesForUserListing($this->responseSchemaValidator, $this->hydrator, $packageType, $visibility, $username, $page, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
