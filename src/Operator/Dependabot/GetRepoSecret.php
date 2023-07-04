<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Dependabot;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\DependabotSecret;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetRepoSecret
{
    public const OPERATION_ID    = 'dependabot/get-repo-secret';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependabot/secrets/{secret_name}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/dependabot/secrets/{secret_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\SecretName $hydrator)
    {
    }

    /** @return PromiseInterface<DependabotSecret> **/
    public function call(string $owner, string $repo, string $secretName): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Dependabot\GetRepoSecret($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $secretName);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): DependabotSecret {
            return $operation->createResponse($response);
        });
    }
}
