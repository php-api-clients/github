<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Activity;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListReposStarredByAuthenticatedUser
{
    public const OPERATION_ID    = 'activity/list-repos-starred-by-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/starred';
    private const METHOD         = 'GET';
    private const PATH           = '/user/starred';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Starred $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $sort = 'created', string $direction = 'desc', int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Activity\ListReposStarredByAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $sort, $direction, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
