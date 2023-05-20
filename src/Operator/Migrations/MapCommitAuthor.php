<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Migrations;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\PorterAuthor;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class MapCommitAuthor
{
    public const OPERATION_ID    = 'migrations/map-commit-author';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/import/authors/{author_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repos/{owner}/{repo}/import/authors/{author_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Import\Authors\AuthorId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<PorterAuthor>
     **/
    public function call(string $owner, string $repo, int $authorId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Migrations\MapCommitAuthor($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $authorId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PorterAuthor {
            return $operation->createResponse($response);
        });
    }
}
