<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Activity;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListReceivedEventsForUser
{
    public const OPERATION_ID    = 'activity/list-received-events-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/received_events';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/received_events';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<ResponseInterface>
     **/
    public function call(string $username, int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Activity\ListReceivedEventsForUser($username, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }
}
