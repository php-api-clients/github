<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Git;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\GitTag;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetTag
{
    public const OPERATION_ID    = 'git/get-tag';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/git/tags/{tag_sha}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/git/tags/{tag_sha}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Git\Tags\TagSha $hydrator)
    {
    }

    /**
     * @return PromiseInterface<GitTag>
     **/
    public function call(string $owner, string $repo, string $tagSha): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Git\GetTag($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $tagSha);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GitTag {
            return $operation->createResponse($response);
        });
    }
}