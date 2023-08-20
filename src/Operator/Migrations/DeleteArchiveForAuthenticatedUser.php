<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Migrations;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteArchiveForAuthenticatedUser
{
    public const OPERATION_ID    = 'migrations/delete-archive-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/migrations/{migration_id}/archive';
    private const METHOD         = 'DELETE';
    private const PATH           = '/user/migrations/{migration_id}/archive';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Migrations\MigrationId\Archive $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(int $migrationId): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Migrations\DeleteArchiveForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $migrationId);
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
