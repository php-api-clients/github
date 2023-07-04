<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Projects;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\ProjectCollaboratorPermission;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetPermissionForUser
{
    public const OPERATION_ID    = 'projects/get-permission-for-user';
    public const OPERATION_MATCH = 'GET /projects/{project_id}/collaborators/{username}/permission';
    private const METHOD         = 'GET';
    private const PATH           = '/projects/{project_id}/collaborators/{username}/permission';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Projects\ProjectId\Collaborators\Username\Permission $hydrator)
    {
    }

    /** @return PromiseInterface<(ProjectCollaboratorPermission|array)> **/
    public function call(int $projectId, string $username): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Projects\GetPermissionForUser($this->responseSchemaValidator, $this->hydrator, $projectId, $username);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ProjectCollaboratorPermission|array {
            return $operation->createResponse($response);
        });
    }
}
