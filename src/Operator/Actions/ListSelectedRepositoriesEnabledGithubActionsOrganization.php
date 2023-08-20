<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListSelectedRepositoriesEnabledGithubActionsOrganization
{
    public const OPERATION_ID    = 'actions/list-selected-repositories-enabled-github-actions-organization';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/permissions/repositories';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/permissions/repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $perPage = 30, int $page = 1): Ok|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization($this->responseSchemaValidator, $this->hydrator, $org, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
