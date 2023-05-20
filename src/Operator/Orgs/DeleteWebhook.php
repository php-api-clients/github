<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteWebhook
{
    public const OPERATION_ID    = 'orgs/delete-webhook';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/hooks/{hook_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/hooks/{hook_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Hooks\HookId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $org, int $hookId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\DeleteWebhook($this->responseSchemaValidator, $this->hydrator, $org, $hookId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
