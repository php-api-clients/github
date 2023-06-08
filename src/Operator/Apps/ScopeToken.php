<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Apps;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Authorization;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ScopeToken
{
    public const OPERATION_ID    = 'apps/scope-token';
    public const OPERATION_MATCH = 'POST /applications/{client_id}/token/scoped';
    private const METHOD         = 'POST';
    private const PATH           = '/applications/{client_id}/token/scoped';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Applications\ClientId\Token\Scoped $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Authorization>
     **/
    public function call(string $clientId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Apps\ScopeToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $clientId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Authorization {
            return $operation->createResponse($response);
        });
    }
}