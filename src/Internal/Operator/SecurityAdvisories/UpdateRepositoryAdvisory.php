<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateRepositoryAdvisory
{
    public const OPERATION_ID    = 'security-advisories/update-repository-advisory';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/security-advisories/{ghsa_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId $hydrator)
    {
    }

    /** @return Schema\RepositoryAdvisory */
    public function call(string $owner, string $repo, string $ghsaId, array $params): RepositoryAdvisory|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\SecurityAdvisories\UpdateRepositoryAdvisory($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ghsaId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RepositoryAdvisory|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
