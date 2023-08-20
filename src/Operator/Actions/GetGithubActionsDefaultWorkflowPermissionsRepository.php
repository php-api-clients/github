<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\ActionsGetDefaultWorkflowPermissions;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetGithubActionsDefaultWorkflowPermissionsRepository
{
    public const OPERATION_ID    = 'actions/get-github-actions-default-workflow-permissions-repository';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/permissions/workflow';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/actions/permissions/workflow';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo): ActionsGetDefaultWorkflowPermissions|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsGetDefaultWorkflowPermissions|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
