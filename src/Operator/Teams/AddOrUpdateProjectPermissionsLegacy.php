<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class AddOrUpdateProjectPermissionsLegacy
{
    public const OPERATION_ID    = 'teams/add-or-update-project-permissions-legacy';
    public const OPERATION_MATCH = 'PUT /teams/{team_id}/projects/{project_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/teams/{team_id}/projects/{project_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Teams\TeamId\Projects\ProjectId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $teamId, int $projectId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\AddOrUpdateProjectPermissionsLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $teamId, $projectId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
