<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\Payload\Zero;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class EnableLfsForRepo
{
    public const OPERATION_ID    = 'repos/enable-lfs-for-repo';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/lfs';
    private const METHOD         = 'PUT';
    private const PATH           = '/repos/{owner}/{repo}/lfs';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Lfs $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(Zero|array)>
     **/
    public function call(string $owner, string $repo): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\EnableLfsForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Zero|array {
            return $operation->createResponse($response);
        });
    }
}
