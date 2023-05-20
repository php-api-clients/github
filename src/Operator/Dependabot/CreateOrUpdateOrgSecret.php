<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Dependabot;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateOrUpdateOrgSecret
{
    public const OPERATION_ID    = 'dependabot/create-or-update-org-secret';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/dependabot/secrets/{secret_name}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/dependabot/secrets/{secret_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(EmptyObject|array)>
     **/
    public function call(string $org, string $secretName, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Dependabot\CreateOrUpdateOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secretName);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EmptyObject|array {
            return $operation->createResponse($response);
        });
    }
}
