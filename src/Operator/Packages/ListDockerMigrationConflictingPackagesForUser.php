<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Packages;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListDockerMigrationConflictingPackagesForUser
{
    public const OPERATION_ID    = 'packages/list-docker-migration-conflicting-packages-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/docker/conflicts';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/docker/conflicts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Users\Username\Docker\Conflicts $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(string $username): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Packages\ListDockerMigrationConflictingPackagesForUser($this->responseSchemaValidator, $this->hydrator, $username);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
