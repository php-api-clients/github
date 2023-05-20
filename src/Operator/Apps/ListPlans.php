<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Apps;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListPlans
{
    public const OPERATION_ID    = 'apps/list-plans';
    public const OPERATION_MATCH = 'GET /marketplace_listing/plans';
    private const METHOD         = 'GET';
    private const PATH           = '/marketplace_listing/plans';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\MarketplaceListing\Plans $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Apps\ListPlans($this->responseSchemaValidator, $this->hydrator, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
