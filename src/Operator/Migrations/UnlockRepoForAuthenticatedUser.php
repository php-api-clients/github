<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Migrations;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UnlockRepoForAuthenticatedUser
{
    public const OPERATION_ID    = 'migrations/unlock-repo-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/migrations/{migration_id}/repos/{repo_name}/lock';
    private const METHOD         = 'DELETE';
    private const PATH           = '/user/migrations/{migration_id}/repos/{repo_name}/lock';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Migrations\MigrationId\Repos\RepoName\Lock $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $migrationId, string $repoName): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Migrations\UnlockRepoForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $migrationId, $repoName);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
