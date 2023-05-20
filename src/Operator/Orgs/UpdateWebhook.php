<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\OrgHook;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateWebhook
{
    public const OPERATION_ID    = 'orgs/update-webhook';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/hooks/{hook_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}/hooks/{hook_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Hooks\HookId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<OrgHook>
     **/
    public function call(string $org, int $hookId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\UpdateWebhook($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $hookId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrgHook {
            return $operation->createResponse($response);
        });
    }
}
