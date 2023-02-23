<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github;

use ApiClients\Client\Github\Client;
use ApiClients\Client\Github\ClientInterface;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;

use React\Http\Browser;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;
use function time;

final class FunctionalClientTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function whoAmI(): void
    {
        $client = $this->createClient();
        $root = $client->call(\ApiClients\Client\Github\Operation\Meta\Root::OPERATION_MATCH);
        var_export([$root]);
    }

    private function createClient(): ClientInterface
    {
        return new Client(
            new class() implements AuthenticationInterface {
                public function authHeader(): string
                {
                    return getenv('GITHUB_TOKEN') ?? '';
                }
            },
            new Browser(),
        );
    }
}
