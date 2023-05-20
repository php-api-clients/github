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

final readonly class CreateOrUpdateRepoSecret
{
    public const OPERATION_ID    = 'dependabot/create-or-update-repo-secret';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/dependabot/secrets/{secret_name}';
    private const METHOD         = 'PUT';
    private const PATH           = '/repos/{owner}/{repo}/dependabot/secrets/{secret_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\SecretName $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(EmptyObject|array)>
     **/
    public function call(string $owner, string $repo, string $secretName, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Dependabot\CreateOrUpdateRepoSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $secretName);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EmptyObject|array {
            return $operation->createResponse($response);
        });
    }
}
