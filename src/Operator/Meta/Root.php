<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Meta;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class Root
{
    public const OPERATION_ID    = 'meta/root';
    public const OPERATION_MATCH = 'GET /';
    private const METHOD         = 'GET';
    private const PATH           = '/';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Root $hydrator)
    {
    }

    /**
     * @return PromiseInterface<\ApiClients\Client\GitHub\Schema\Root>
     **/
    public function call(): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Meta\Root($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHub\Schema\Root {
            return $operation->createResponse($response);
        });
    }
}
