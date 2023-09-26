<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Meta;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class Root
{
    public const OPERATION_ID    = 'meta/root';
    public const OPERATION_MATCH = 'GET /';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Root $hydrator)
    {
    }

    /** @return */
    public function call(): \ApiClients\Client\GitHub\Schema\Root|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Meta\Root($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHub\Schema\Root|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}