<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Operation\Repos\ListActivities */
final class ListActivitiesTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ValidationErrorSimple::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ValidationErrorSimple::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/activity?before=generated&after=generated&ref=generated&actor=generated&time_period=generated&activity_type=generated&direction=generated&per_page=8', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Repos\ListActivities::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']         = 'generated';
            $data['repo']          = 'generated';
            $data['before']        = 'generated';
            $data['after']         = 'generated';
            $data['ref']           = 'generated';
            $data['actor']         = 'generated';
            $data['time_period']   = 'generated';
            $data['activity_type'] = 'generated';
            $data['direction']     = 'generated';
            $data['per_page']      = 8;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ValidationErrorSimple::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ValidationErrorSimple::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/activity?before=generated&after=generated&ref=generated&actor=generated&time_period=generated&activity_type=generated&direction=generated&per_page=8', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->repos()->listActivities('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 8);
    }
}
