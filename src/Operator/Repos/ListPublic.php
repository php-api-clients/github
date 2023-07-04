<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListPublic
{
    public const OPERATION_ID    = 'repos/list-public';
    public const OPERATION_MATCH = 'GET /repositories';
    private const METHOD         = 'GET';
    private const PATH           = '/repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repositories $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(int $since): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\ListPublic($this->responseSchemaValidator, $this->hydrator, $since);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
