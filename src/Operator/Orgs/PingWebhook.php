<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class PingWebhook
{
    public const OPERATION_ID    = 'orgs/ping-webhook';
    public const OPERATION_MATCH = 'POST /orgs/{org}/hooks/{hook_id}/pings';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/hooks/{hook_id}/pings';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $org, int $hookId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\PingWebhook($this->responseSchemaValidator, $this->hydrator, $org, $hookId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
