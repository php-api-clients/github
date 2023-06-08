<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\RepositoryCollaboratorPermission;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetCollaboratorPermissionLevel
{
    public const OPERATION_ID    = 'repos/get-collaborator-permission-level';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/collaborators/{username}/permission';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/collaborators/{username}/permission';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission $hydrator)
    {
    }

    /**
     * @return PromiseInterface<RepositoryCollaboratorPermission>
     **/
    public function call(string $owner, string $repo, string $username): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetCollaboratorPermissionLevel($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $username);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RepositoryCollaboratorPermission {
            return $operation->createResponse($response);
        });
    }
}