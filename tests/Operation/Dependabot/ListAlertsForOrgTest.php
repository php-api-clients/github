<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Dependabot;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Dependabot\ListAlertsForOrg;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class ListAlertsForOrgTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], '[' . Schema\DependabotAlertWithRepository::SCHEMA_EXAMPLE_DATA . ']');
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListAlertsForOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated_null';
            $data['state']     = 'generated_null';
            $data['severity']  = 'generated_null';
            $data['ecosystem'] = 'generated_null';
            $data['package']   = 'generated_null';
            $data['scope']     = 'generated_null';
            $data['before']    = 'generated_null';
            $data['after']     = 'generated_null';
            $data['last']      = 13;
            $data['sort']      = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['first']     = 13;
            $data['per_page']  = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_400_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListAlertsForOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated_null';
            $data['state']     = 'generated_null';
            $data['severity']  = 'generated_null';
            $data['ecosystem'] = 'generated_null';
            $data['package']   = 'generated_null';
            $data['scope']     = 'generated_null';
            $data['before']    = 'generated_null';
            $data['after']     = 'generated_null';
            $data['last']      = 13;
            $data['sort']      = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['first']     = 13;
            $data['per_page']  = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_400_responseContentType_application_scim_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListAlertsForOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated_null';
            $data['state']     = 'generated_null';
            $data['severity']  = 'generated_null';
            $data['ecosystem'] = 'generated_null';
            $data['package']   = 'generated_null';
            $data['scope']     = 'generated_null';
            $data['before']    = 'generated_null';
            $data['after']     = 'generated_null';
            $data['last']      = 13;
            $data['sort']      = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['first']     = 13;
            $data['per_page']  = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_403_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListAlertsForOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated_null';
            $data['state']     = 'generated_null';
            $data['severity']  = 'generated_null';
            $data['ecosystem'] = 'generated_null';
            $data['package']   = 'generated_null';
            $data['scope']     = 'generated_null';
            $data['before']    = 'generated_null';
            $data['after']     = 'generated_null';
            $data['last']      = 13;
            $data['sort']      = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['first']     = 13;
            $data['per_page']  = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_404_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListAlertsForOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated_null';
            $data['state']     = 'generated_null';
            $data['severity']  = 'generated_null';
            $data['ecosystem'] = 'generated_null';
            $data['package']   = 'generated_null';
            $data['scope']     = 'generated_null';
            $data['before']    = 'generated_null';
            $data['after']     = 'generated_null';
            $data['last']      = 13;
            $data['sort']      = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['first']     = 13;
            $data['per_page']  = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_422_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ValidationErrorSimple::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\ValidationErrorSimple::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListAlertsForOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated_null';
            $data['state']     = 'generated_null';
            $data['severity']  = 'generated_null';
            $data['ecosystem'] = 'generated_null';
            $data['package']   = 'generated_null';
            $data['scope']     = 'generated_null';
            $data['before']    = 'generated_null';
            $data['after']     = 'generated_null';
            $data['last']      = 13;
            $data['sort']      = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['first']     = 13;
            $data['per_page']  = 13;

            return $data;
        })([]));
    }
}
