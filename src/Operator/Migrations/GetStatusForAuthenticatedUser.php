<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Migrations;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Migration;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetStatusForAuthenticatedUser
{
    public const OPERATION_ID    = 'migrations/get-status-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/migrations/{migration_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/user/migrations/{migration_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Migrations\MigrationId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(Migration|array)>
     **/
    public function call(int $migrationId, array $exclude): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Migrations\GetStatusForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $migrationId, $exclude);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Migration|array {
            return $operation->createResponse($response);
        });
    }
}
