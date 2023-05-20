<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RemoveProjectLegacy
{
    public const OPERATION_ID    = 'teams/remove-project-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/projects/{project_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/teams/{team_id}/projects/{project_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Teams\TeamId\Projects\ProjectId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $teamId, int $projectId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\RemoveProjectLegacy($this->responseSchemaValidator, $this->hydrator, $teamId, $projectId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
