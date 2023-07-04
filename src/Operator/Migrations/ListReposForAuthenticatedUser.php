<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Migrations;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListReposForAuthenticatedUser
{
    public const OPERATION_ID    = 'migrations/list-repos-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/migrations/{migration_id}/repositories';
    private const METHOD         = 'GET';
    private const PATH           = '/user/migrations/{migration_id}/repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Migrations\MigrationId\Repositories $hydrator)
    {
    }

    /** @return PromiseInterface<mixed> **/
    public function call(int $migrationId, int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Migrations\ListReposForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $migrationId, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
