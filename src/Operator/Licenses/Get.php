<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Licenses;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\License;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class Get
{
    public const OPERATION_ID    = 'licenses/get';
    public const OPERATION_MATCH = 'GET /licenses/{license}';
    private const METHOD         = 'GET';
    private const PATH           = '/licenses/{license}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Licenses\License $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(License|array)>
     **/
    public function call(string $license): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Licenses\Get($this->responseSchemaValidator, $this->hydrator, $license);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): License|array {
            return $operation->createResponse($response);
        });
    }
}
