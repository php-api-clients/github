<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Markdown;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RenderRaw
{
    public const OPERATION_ID    = 'markdown/render-raw';
    public const OPERATION_MATCH = 'POST /markdown/raw';
    private const METHOD         = 'POST';
    private const PATH           = '/markdown/raw';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Markdown\Raw $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(array|string)>
     **/
    public function call(array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Markdown\RenderRaw($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array|string {
            return $operation->createResponse($response);
        });
    }
}
