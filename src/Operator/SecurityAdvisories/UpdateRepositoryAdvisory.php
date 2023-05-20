<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\SecurityAdvisories;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateRepositoryAdvisory
{
    public const OPERATION_ID    = 'security-advisories/update-repository-advisory';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/security-advisories/{ghsa_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repos/{owner}/{repo}/security-advisories/{ghsa_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<RepositoryAdvisory>
     **/
    public function call(string $owner, string $repo, string $ghsaId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\SecurityAdvisories\UpdateRepositoryAdvisory($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ghsaId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RepositoryAdvisory {
            return $operation->createResponse($response);
        });
    }
}
