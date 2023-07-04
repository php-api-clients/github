<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Activity;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListNotificationsForAuthenticatedUser
{
    public const OPERATION_ID    = 'activity/list-notifications-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /notifications';
    private const METHOD         = 'GET';
    private const PATH           = '/notifications';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Notifications $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(string $since, string $before, bool $all = false, bool $participating = false, int $page = 1, int $perPage = 50): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Activity\ListNotificationsForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $since, $before, $all, $participating, $page, $perPage);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
