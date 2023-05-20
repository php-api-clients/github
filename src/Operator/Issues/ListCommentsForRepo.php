<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Issues;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListCommentsForRepo
{
    public const OPERATION_ID    = 'issues/list-comments-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues/comments';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/issues/comments';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Issues\Comments $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(string $owner, string $repo, string $direction, string $since, string $sort = 'created', int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Issues\ListCommentsForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $direction, $since, $sort, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
