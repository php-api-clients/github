<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Markdown;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Async\await;
use function React\Promise\resolve;

final class RenderRawTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function call_httpCode_304_requestContentType_text_plain_empty(): void
    {
        $response = new Response(304, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/markdown/raw', Argument::type('array'), Schema\Operations\Gitignore\GetAllTemplates\Response\ApplicationJson\Ok::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Markdown\RenderRaw::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\Operations\Gitignore\GetAllTemplates\Response\ApplicationJson\Ok::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_304_requestContentType_text_plain_empty(): void
    {
        $response = new Response(304, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/markdown/raw', Argument::type('array'), Schema\Operations\Gitignore\GetAllTemplates\Response\ApplicationJson\Ok::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->markdown()->renderRaw(json_decode(Schema\Operations\Gitignore\GetAllTemplates\Response\ApplicationJson\Ok::SCHEMA_EXAMPLE_DATA, true)));
        self::assertArrayHasKey('code', $result);
        self::assertSame(304, $result['code']);
    }

    /**
     * @test
     */
    public function call_httpCode_304_requestContentType_text_x_markdown_empty(): void
    {
        $response = new Response(304, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/markdown/raw', Argument::type('array'), Schema\Operations\Gitignore\GetAllTemplates\Response\ApplicationJson\Ok::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Markdown\RenderRaw::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\Operations\Gitignore\GetAllTemplates\Response\ApplicationJson\Ok::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_304_requestContentType_text_x_markdown_empty(): void
    {
        $response = new Response(304, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/markdown/raw', Argument::type('array'), Schema\Operations\Gitignore\GetAllTemplates\Response\ApplicationJson\Ok::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->markdown()->renderRaw(json_decode(Schema\Operations\Gitignore\GetAllTemplates\Response\ApplicationJson\Ok::SCHEMA_EXAMPLE_DATA, true)));
        self::assertArrayHasKey('code', $result);
        self::assertSame(304, $result['code']);
    }
}
