<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\SecurityAdvisories;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
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

/** @covers \ApiClients\Client\GitHub\Internal\Operation\SecurityAdvisories\ListGlobalAdvisories */
final class ListGlobalAdvisoriesTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_429_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(429, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/advisories?ghsa_id=generated&cve_id=generated&ecosystem=generated&severity=generated&cwes=&is_withdrawn=&affects=&published=generated&updated=generated&modified=generated&before=generated&after=generated&type=generated&direction=generated&per_page=8&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\SecurityAdvisories\ListGlobalAdvisories::OPERATION_MATCH, (static function (array $data): array {
            $data['ghsa_id']      = 'generated';
            $data['cve_id']       = 'generated';
            $data['ecosystem']    = 'generated';
            $data['severity']     = 'generated';
            $data['cwes']         = null;
            $data['is_withdrawn'] = false;
            $data['affects']      = null;
            $data['published']    = 'generated';
            $data['updated']      = 'generated';
            $data['modified']     = 'generated';
            $data['before']       = 'generated';
            $data['after']        = 'generated';
            $data['type']         = 'generated';
            $data['direction']    = 'generated';
            $data['per_page']     = 8;
            $data['sort']         = 'generated';

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_429_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(429, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/advisories?ghsa_id=generated&cve_id=generated&ecosystem=generated&severity=generated&cwes=&is_withdrawn=&affects=&published=generated&updated=generated&modified=generated&before=generated&after=generated&type=generated&direction=generated&per_page=8&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->securityAdvisories()->listGlobalAdvisories('generated', 'generated', 'generated', 'generated', null, false, null, 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 8, 'generated');
    }

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
        $browser->request('GET', '/advisories?ghsa_id=generated&cve_id=generated&ecosystem=generated&severity=generated&cwes=&is_withdrawn=&affects=&published=generated&updated=generated&modified=generated&before=generated&after=generated&type=generated&direction=generated&per_page=8&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\SecurityAdvisories\ListGlobalAdvisories::OPERATION_MATCH, (static function (array $data): array {
            $data['ghsa_id']      = 'generated';
            $data['cve_id']       = 'generated';
            $data['ecosystem']    = 'generated';
            $data['severity']     = 'generated';
            $data['cwes']         = null;
            $data['is_withdrawn'] = false;
            $data['affects']      = null;
            $data['published']    = 'generated';
            $data['updated']      = 'generated';
            $data['modified']     = 'generated';
            $data['before']       = 'generated';
            $data['after']        = 'generated';
            $data['type']         = 'generated';
            $data['direction']    = 'generated';
            $data['per_page']     = 8;
            $data['sort']         = 'generated';

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
        $browser->request('GET', '/advisories?ghsa_id=generated&cve_id=generated&ecosystem=generated&severity=generated&cwes=&is_withdrawn=&affects=&published=generated&updated=generated&modified=generated&before=generated&after=generated&type=generated&direction=generated&per_page=8&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->securityAdvisories()->listGlobalAdvisories('generated', 'generated', 'generated', 'generated', null, false, null, 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 8, 'generated');
    }
}
