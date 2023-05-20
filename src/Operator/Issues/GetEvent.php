<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Issues;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\IssueEvent;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetEvent
{
    public const OPERATION_ID    = 'issues/get-event';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues/events/{event_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/issues/events/{event_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Issues\Events\EventId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<IssueEvent>
     **/
    public function call(string $owner, string $repo, int $eventId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Issues\GetEvent($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $eventId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): IssueEvent {
            return $operation->createResponse($response);
        });
    }
}
