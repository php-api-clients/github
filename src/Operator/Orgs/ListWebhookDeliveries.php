<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListWebhookDeliveries
{
    public const OPERATION_ID    = 'orgs/list-webhook-deliveries';
    public const OPERATION_MATCH = 'GET /orgs/{org}/hooks/{hook_id}/deliveries';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/hooks/{hook_id}/deliveries';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries $hydrator)
    {
    }

    /** @return iterable<Schema\HookDeliveryItem> */
    public function call(string $org, int $hookId, string $cursor, bool $redelivery, int $perPage = 30): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\ListWebhookDeliveries($this->responseSchemaValidator, $this->hydrator, $org, $hookId, $cursor, $redelivery, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
