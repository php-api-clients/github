<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class AddMemberLegacy
{
    public const OPERATION_ID    = 'teams/add-member-legacy';
    public const OPERATION_MATCH = 'PUT /teams/{team_id}/members/{username}';
    private const METHOD         = 'PUT';
    private const PATH           = '/teams/{team_id}/members/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Teams\TeamId\Members\Username $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $teamId, string $username): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Teams\AddMemberLegacy($this->responseSchemaValidator, $this->hydrator, $teamId, $username);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
