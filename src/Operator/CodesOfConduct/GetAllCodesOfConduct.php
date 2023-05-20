<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\CodesOfConduct;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetAllCodesOfConduct
{
    public const OPERATION_ID    = 'codes-of-conduct/get-all-codes-of-conduct';
    public const OPERATION_MATCH = 'GET /codes_of_conduct';
    private const METHOD         = 'GET';
    private const PATH           = '/codes_of_conduct';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\CodesOfConduct\GetAllCodesOfConduct();
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
