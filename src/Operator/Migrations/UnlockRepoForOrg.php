<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Migrations;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UnlockRepoForOrg
{
    public const OPERATION_ID    = 'migrations/unlock-repo-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repos\RepoName\Lock $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(string $org, int $migrationId, string $repoName): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Migrations\UnlockRepoForOrg($this->responseSchemaValidator, $this->hydrator, $org, $migrationId, $repoName);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
