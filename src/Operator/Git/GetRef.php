<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Git;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\GitRef;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetRef
{
    public const OPERATION_ID    = 'git/get-ref';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/git/ref/{ref}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/git/ref/{ref}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Git\Ref\Ref $hydrator)
    {
    }

    /**
     * @return PromiseInterface<GitRef>
     **/
    public function call(string $owner, string $repo, string $ref): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Git\GetRef($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ref);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GitRef {
            return $operation->createResponse($response);
        });
    }
}
