<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\HookDelivery;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetWebhookDelivery
{
    public const OPERATION_ID    = 'repos/get-webhook-delivery';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<HookDelivery>
     **/
    public function call(string $owner, string $repo, int $hookId, int $deliveryId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetWebhookDelivery($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $hookId, $deliveryId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): HookDelivery {
            return $operation->createResponse($response);
        });
    }
}
