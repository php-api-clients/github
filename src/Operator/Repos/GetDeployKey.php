<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\DeployKey;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetDeployKey
{
    public const OPERATION_ID    = 'repos/get-deploy-key';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/keys/{key_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/keys/{key_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Keys\KeyId $hydrator)
    {
    }

    /** @return PromiseInterface<DeployKey> **/
    public function call(string $owner, string $repo, int $keyId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetDeployKey($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $keyId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): DeployKey {
            return $operation->createResponse($response);
        });
    }
}
