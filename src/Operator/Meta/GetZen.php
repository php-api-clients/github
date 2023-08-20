<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Meta;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetZen
{
    public const OPERATION_ID    = 'meta/get-zen';
    public const OPERATION_MATCH = 'GET /zen';
    private const METHOD         = 'GET';
    private const PATH           = '/zen';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Zen $hydrator)
    {
    }

    /** @return */
    public function call(): string|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Meta\GetZen($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): string|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
