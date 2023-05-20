<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetAccessRestrictions
{
    public const OPERATION_ID    = 'repos/get-access-restrictions';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions $hydrator)
    {
    }

    /**
     * @return PromiseInterface<BranchRestrictionPolicy>
     **/
    public function call(string $owner, string $repo, string $branch): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetAccessRestrictions($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $branch);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): BranchRestrictionPolicy {
            return $operation->createResponse($response);
        });
    }
}
