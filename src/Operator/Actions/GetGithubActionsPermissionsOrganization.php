<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\ActionsOrganizationPermissions;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetGithubActionsPermissionsOrganization
{
    public const OPERATION_ID    = 'actions/get-github-actions-permissions-organization';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/permissions';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/permissions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Permissions $hydrator)
    {
    }

    /**
     * @return PromiseInterface<ActionsOrganizationPermissions>
     **/
    public function call(string $org): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\GetGithubActionsPermissionsOrganization($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ActionsOrganizationPermissions {
            return $operation->createResponse($response);
        });
    }
}
