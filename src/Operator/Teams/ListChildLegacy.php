<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListChildLegacy
{
    public const OPERATION_ID    = 'teams/list-child-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/teams';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}/teams';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Teams\TeamId\Teams $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(int $teamId, int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\ListChildLegacy($this->responseSchemaValidator, $this->hydrator, $teamId, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}