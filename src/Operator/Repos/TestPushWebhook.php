<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class TestPushWebhook
{
    public const OPERATION_ID    = 'repos/test-push-webhook';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/hooks/{hook_id}/tests';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/hooks/{hook_id}/tests';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Tests $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $owner, string $repo, int $hookId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\TestPushWebhook($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $hookId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
