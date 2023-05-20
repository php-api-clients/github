<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Dependabot;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\DependabotPublicKey;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetRepoPublicKey
{
    public const OPERATION_ID    = 'dependabot/get-repo-public-key';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependabot/secrets/public-key';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/dependabot/secrets/public-key';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\PublicKey $hydrator)
    {
    }

    /**
     * @return PromiseInterface<DependabotPublicKey>
     **/
    public function call(string $owner, string $repo): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Dependabot\GetRepoPublicKey($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): DependabotPublicKey {
            return $operation->createResponse($response);
        });
    }
}
