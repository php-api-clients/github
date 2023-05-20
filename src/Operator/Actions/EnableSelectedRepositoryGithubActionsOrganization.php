<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class EnableSelectedRepositoryGithubActionsOrganization
{
    public const OPERATION_ID    = 'actions/enable-selected-repository-github-actions-organization';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/permissions/repositories/{repository_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/actions/permissions/repositories/{repository_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $org, int $repositoryId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization($org, $repositoryId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
