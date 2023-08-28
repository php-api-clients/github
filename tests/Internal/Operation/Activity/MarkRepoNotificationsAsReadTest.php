<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\Activity;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Internal\Operation\Activity\MarkRepoNotificationsAsRead */
final class MarkRepoNotificationsAsReadTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_202_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated/generated/notifications', Argument::type('array'), json_encode(json_decode(Schema\Activity\MarkRepoNotificationsAsRead\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Activity\MarkRepoNotificationsAsRead::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated';
            $data['repo']  = 'generated';

            return $data;
        })(json_decode(Schema\Activity\MarkRepoNotificationsAsRead\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_202_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated/generated/notifications', Argument::type('array'), json_encode(json_decode(Schema\Activity\MarkRepoNotificationsAsRead\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->activity()->markRepoNotificationsAsRead('generated', 'generated', json_decode(Schema\Activity\MarkRepoNotificationsAsRead\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_205_requestContentType_application_json_empty(): void
    {
        $response = new Response(205, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated/generated/notifications', Argument::type('array'), json_encode(json_decode(Schema\Activity\MarkRepoNotificationsAsRead\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Activity\MarkRepoNotificationsAsRead::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated';
            $data['repo']  = 'generated';

            return $data;
        })(json_decode(Schema\Activity\MarkRepoNotificationsAsRead\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_205_requestContentType_application_json_empty(): void
    {
        $response = new Response(205, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated/generated/notifications', Argument::type('array'), json_encode(json_decode(Schema\Activity\MarkRepoNotificationsAsRead\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->activity()->markRepoNotificationsAsRead('generated', 'generated', json_decode(Schema\Activity\MarkRepoNotificationsAsRead\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
        self::assertArrayHasKey('code', $result);
        self::assertSame(205, $result['code']);
    }
}
