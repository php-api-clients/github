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

final readonly class ListDockerMigrationConflictingPackagesForOrganization
{
    public const OPERATION_ID    = 'packages/list-docker-migration-conflicting-packages-for-organization';
    public const OPERATION_MATCH = 'GET /orgs/{org}/docker/conflicts';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/docker/conflicts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Docker\Conflicts $hydrator)
    {
    }

    /** @return iterable<Schema\Package> */
    public function call(string $org): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Packages\ListDockerMigrationConflictingPackagesForOrganization($this->responseSchemaValidator, $this->hydrator, $org);
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
