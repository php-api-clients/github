<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Issues;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Issues\List_;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class List_Test extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], '[' . Schema\Issue::SCHEMA_EXAMPLE_DATA . ']');
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/issues?labels=generated_null&since=1970-01-01T00:00:00+00:00&collab=&orgs=&owned=&pulls=&filter=generated_null&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(List_::OPERATION_MATCH, (static function (array $data): array {
            $data['labels']    = 'generated_null';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['collab']    = false;
            $data['orgs']      = false;
            $data['owned']     = false;
            $data['pulls']     = false;
            $data['filter']    = 'generated_null';
            $data['state']     = 'generated_null';
            $data['sort']      = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['per_page']  = 13;
            $data['page']      = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_422_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/issues?labels=generated_null&since=1970-01-01T00:00:00+00:00&collab=&orgs=&owned=&pulls=&filter=generated_null&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(List_::OPERATION_MATCH, (static function (array $data): array {
            $data['labels']    = 'generated_null';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['collab']    = false;
            $data['orgs']      = false;
            $data['owned']     = false;
            $data['pulls']     = false;
            $data['filter']    = 'generated_null';
            $data['state']     = 'generated_null';
            $data['sort']      = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['per_page']  = 13;
            $data['page']      = 13;

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
        $browser->request('GET', '/issues?labels=generated_null&since=1970-01-01T00:00:00+00:00&collab=&orgs=&owned=&pulls=&filter=generated_null&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(List_::OPERATION_MATCH, (static function (array $data): array {
            $data['labels']    = 'generated_null';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['collab']    = false;
            $data['orgs']      = false;
            $data['owned']     = false;
            $data['pulls']     = false;
            $data['filter']    = 'generated_null';
            $data['state']     = 'generated_null';
            $data['sort']      = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['per_page']  = 13;
            $data['page']      = 13;

            return $data;
        })([]));
    }
}
