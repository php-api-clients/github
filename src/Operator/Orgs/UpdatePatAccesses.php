<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\Payload\Zero;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdatePatAccesses
{
    public const OPERATION_ID    = 'orgs/update-pat-accesses';
    public const OPERATION_MATCH = 'POST /organizations/{org}/personal-access-tokens';
    private const METHOD         = 'POST';
    private const PATH           = '/organizations/{org}/personal-access-tokens';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Organizations\Org\PersonalAccessTokens $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Zero>
     **/
    public function call(string $org, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\UpdatePatAccesses($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Zero {
            return $operation->createResponse($response);
        });
    }
}
