<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\TeamProject;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CheckPermissionsForProjectLegacy
{
    public const OPERATION_ID    = 'teams/check-permissions-for-project-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/projects/{project_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}/projects/{project_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Teams\TeamId\Projects\ProjectId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(TeamProject|array)>
     **/
    public function call(int $teamId, int $projectId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\CheckPermissionsForProjectLegacy($this->responseSchemaValidator, $this->hydrator, $teamId, $projectId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): TeamProject|array {
            return $operation->createResponse($response);
        });
    }
}
