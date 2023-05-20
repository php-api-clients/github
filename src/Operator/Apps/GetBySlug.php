<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Apps;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetBySlug
{
    public const OPERATION_ID    = 'apps/get-by-slug';
    public const OPERATION_MATCH = 'GET /apps/{app_slug}';
    private const METHOD         = 'GET';
    private const PATH           = '/apps/{app_slug}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Apps\AppSlug $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Integration>
     **/
    public function call(string $appSlug): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Apps\GetBySlug($this->responseSchemaValidator, $this->hydrator, $appSlug);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Integration {
            return $operation->createResponse($response);
        });
    }
}
