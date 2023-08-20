<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Issues;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RemoveLabel
{
    public const OPERATION_ID    = 'issues/remove-label';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels/{name}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/issues/{issue_number}/labels/{name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels\Name $hydrator)
    {
    }

    /** @return (iterable<Schema\Label> | Schema\BasicError) */
    public function call(string $owner, string $repo, int $issueNumber, string $name): iterable|BasicError
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Issues\RemoveLabel($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $issueNumber, $name);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|BasicError|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
