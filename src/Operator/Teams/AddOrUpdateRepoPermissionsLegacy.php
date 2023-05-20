<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class AddOrUpdateRepoPermissionsLegacy
{
    public const OPERATION_ID    = 'teams/add-or-update-repo-permissions-legacy';
    public const OPERATION_MATCH = 'PUT /teams/{team_id}/repos/{owner}/{repo}';
    private const METHOD         = 'PUT';
    private const PATH           = '/teams/{team_id}/repos/{owner}/{repo}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $teamId, string $owner, string $repo, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\AddOrUpdateRepoPermissionsLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $teamId, $owner, $repo);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
