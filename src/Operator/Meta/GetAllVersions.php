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

final readonly class GetAllVersions
{
    public const OPERATION_ID    = 'meta/get-all-versions';
    public const OPERATION_MATCH = 'GET /versions';
    private const METHOD         = 'GET';
    private const PATH           = '/versions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Versions $hydrator)
    {
    }

    /** @return iterable<string> */
    public function call(): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Meta\GetAllVersions($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
