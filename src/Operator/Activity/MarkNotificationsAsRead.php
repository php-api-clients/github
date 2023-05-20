<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Activity;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class MarkNotificationsAsRead
{
    public const OPERATION_ID    = 'activity/mark-notifications-as-read';
    public const OPERATION_MATCH = 'PUT /notifications';
    private const METHOD         = 'PUT';
    private const PATH           = '/notifications';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Notifications $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(Accepted|array)>
     **/
    public function call(array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Activity\MarkNotificationsAsRead($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Accepted|array {
            return $operation->createResponse($response);
        });
    }
}
