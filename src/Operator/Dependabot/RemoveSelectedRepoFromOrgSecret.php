<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Dependabot;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RemoveSelectedRepoFromOrgSecret
{
    public const OPERATION_ID    = 'dependabot/remove-selected-repo-from-org-secret';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int} */
    public function call(string $org, string $secretName, int $repositoryId): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Dependabot\RemoveSelectedRepoFromOrgSecret($org, $secretName, $repositoryId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
