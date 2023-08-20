<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateWebhookConfigForOrg
{
    public const OPERATION_ID    = 'orgs/update-webhook-config-for-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/hooks/{hook_id}/config';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}/hooks/{hook_id}/config';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Hooks\HookId\Config $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $hookId, array $params): WebhookConfig|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\UpdateWebhookConfigForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $hookId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WebhookConfig|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
