<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Migrations;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListReposForAuthenticatedUser
{
    public const OPERATION_ID    = 'migrations/list-repos-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/migrations/{migration_id}/repositories';
    private const METHOD         = 'GET';
    private const PATH           = '/user/migrations/{migration_id}/repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Migrations\MigrationId\Repositories $hydrator)
    {
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function call(int $migrationId, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Migrations\ListReposForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $migrationId, $perPage, $page);
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
