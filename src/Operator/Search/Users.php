<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Search;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\Search\Users\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class Users
{
    public const OPERATION_ID    = 'search/users';
    public const OPERATION_MATCH = 'GET /search/users';
    private const METHOD         = 'GET';
    private const PATH           = '/search/users';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Search\Users $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(Ok|array)>
     **/
    public function call(string $q, string $sort, string $order = 'desc', int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Search\Users($this->responseSchemaValidator, $this->hydrator, $q, $sort, $order, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok|array {
            return $operation->createResponse($response);
        });
    }
}