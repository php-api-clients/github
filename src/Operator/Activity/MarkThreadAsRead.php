<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Activity;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class MarkThreadAsRead
{
    public const OPERATION_ID    = 'activity/mark-thread-as-read';
    public const OPERATION_MATCH = 'PATCH /notifications/threads/{thread_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/notifications/threads/{thread_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Notifications\Threads\ThreadId $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(int $threadId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Activity\MarkThreadAsRead($this->responseSchemaValidator, $this->hydrator, $threadId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
