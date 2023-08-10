<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\SecurityAdvisories;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Operations\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateRepositoryAdvisoryCveRequest
{
    public const OPERATION_ID    = 'security-advisories/create-repository-advisory-cve-request';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/security-advisories/{ghsa_id}/cve';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/security-advisories/{ghsa_id}/cve';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Cve $hydrator)
    {
    }

    /** @return PromiseInterface<Json> **/
    public function call(string $owner, string $repo, string $ghsaId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ghsaId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Json {
            return $operation->createResponse($response);
        });
    }
}
