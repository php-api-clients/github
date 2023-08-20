<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Meta;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetOctocat
{
    public const OPERATION_ID    = 'meta/get-octocat';
    public const OPERATION_MATCH = 'GET /octocat';
    private const METHOD         = 'GET';
    private const PATH           = '/octocat';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function call(string $s): ResponseInterface|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Meta\GetOctocat($s);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
