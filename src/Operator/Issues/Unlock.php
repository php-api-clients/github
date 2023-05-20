<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Issues;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class Unlock
{
    public const OPERATION_ID    = 'issues/unlock';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/lock';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/issues/{issue_number}/lock';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Lock $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $owner, string $repo, int $issueNumber): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Issues\Unlock($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $issueNumber);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
