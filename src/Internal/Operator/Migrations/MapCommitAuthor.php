<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Migrations;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\PorterAuthor;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class MapCommitAuthor
{
    public const OPERATION_ID    = 'migrations/map-commit-author';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/import/authors/{author_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Authors\AuthorId $hydrator)
    {
    }

    /** @return Schema\PorterAuthor */
    public function call(string $owner, string $repo, int $authorId, array $params): PorterAuthor|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Migrations\MapCommitAuthor($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $authorId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PorterAuthor|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
