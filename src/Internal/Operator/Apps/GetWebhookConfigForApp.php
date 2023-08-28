<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Apps;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetWebhookConfigForApp
{
    public const OPERATION_ID    = 'apps/get-webhook-config-for-app';
    public const OPERATION_MATCH = 'GET /app/hook/config';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\App\Hook\Config $hydrator)
    {
    }

    /** @return Schema\WebhookConfig */
    public function call(): WebhookConfig|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Apps\GetWebhookConfigForApp($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WebhookConfig|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
