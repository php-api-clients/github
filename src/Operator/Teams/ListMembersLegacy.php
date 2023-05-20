<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListMembersLegacy
{
    public const OPERATION_ID    = 'teams/list-members-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/members';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}/members';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Teams\TeamId\Members $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(int $teamId, string $role = 'all', int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\ListMembersLegacy($this->responseSchemaValidator, $this->hydrator, $teamId, $role, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
