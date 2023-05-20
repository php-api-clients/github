<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\TeamFull;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetLegacy
{
    public const OPERATION_ID    = 'teams/get-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Teams\TeamId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<TeamFull>
     **/
    public function call(int $teamId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\GetLegacy($this->responseSchemaValidator, $this->hydrator, $teamId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): TeamFull {
            return $operation->createResponse($response);
        });
    }
}
