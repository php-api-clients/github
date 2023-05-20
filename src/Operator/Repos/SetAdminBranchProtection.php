<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class SetAdminBranchProtection
{
    public const OPERATION_ID    = 'repos/set-admin-branch-protection';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins $hydrator)
    {
    }

    /**
     * @return PromiseInterface<ProtectedBranchAdminEnforced>
     **/
    public function call(string $owner, string $repo, string $branch): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\SetAdminBranchProtection($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $branch);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ProtectedBranchAdminEnforced {
            return $operation->createResponse($response);
        });
    }
}
