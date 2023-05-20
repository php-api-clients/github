<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Licenses;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetAllCommonlyUsed
{
    public const OPERATION_ID    = 'licenses/get-all-commonly-used';
    public const OPERATION_MATCH = 'GET /licenses';
    private const METHOD         = 'GET';
    private const PATH           = '/licenses';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(bool $featured, int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Licenses\GetAllCommonlyUsed($featured, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
