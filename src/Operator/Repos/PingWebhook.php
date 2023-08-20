<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class PingWebhook
{
    public const OPERATION_ID    = 'repos/ping-webhook';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/hooks/{hook_id}/pings';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/hooks/{hook_id}/pings';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Pings $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(string $owner, string $repo, int $hookId): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\PingWebhook($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $hookId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
