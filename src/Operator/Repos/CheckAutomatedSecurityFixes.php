<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CheckAutomatedSecurityFixes
{
    public const OPERATION_ID    = 'repos/check-automated-security-fixes';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/automated-security-fixes';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/automated-security-fixes';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\AutomatedSecurityFixes $hydrator)
    {
    }

    /** @return PromiseInterface<(\ApiClients\Client\GitHub\Schema\CheckAutomatedSecurityFixes|array)> **/
    public function call(string $owner, string $repo): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\CheckAutomatedSecurityFixes($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHub\Schema\CheckAutomatedSecurityFixes|array {
            return $operation->createResponse($response);
        });
    }
}
