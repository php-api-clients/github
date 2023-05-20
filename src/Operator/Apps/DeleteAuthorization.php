<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Apps;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteAuthorization
{
    public const OPERATION_ID    = 'apps/delete-authorization';
    public const OPERATION_MATCH = 'DELETE /applications/{client_id}/grant';
    private const METHOD         = 'DELETE';
    private const PATH           = '/applications/{client_id}/grant';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Applications\ClientId\Grant $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $clientId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Apps\DeleteAuthorization($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $clientId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
