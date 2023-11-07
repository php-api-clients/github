<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Apps;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RevokeInstallationAccessToken
{
    public const OPERATION_ID    = 'apps/revoke-installation-access-token';
    public const OPERATION_MATCH = 'DELETE /installation/token';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    public function call(): WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Apps\RevokeInstallationAccessToken();
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
