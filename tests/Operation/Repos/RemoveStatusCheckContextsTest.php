<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Repos\RemoveStatusCheckContexts;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class RemoveStatusCheckContextsTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], '[' . Schema\Operation\Repos\RemoveStatusCheckContexts\Response\Applicationjson\H200::SCHEMA_EXAMPLE_DATA . ']');
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/repos/generated_null/generated_null/branches/generated_null/protection/required_status_checks/contexts', Argument::type('array'), Schema\Repos\RemoveStatusCheckContexts\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(RemoveStatusCheckContexts::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']  = 'generated_null';
            $data['repo']   = 'generated_null';
            $data['branch'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Repos\RemoveStatusCheckContexts\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_404_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/repos/generated_null/generated_null/branches/generated_null/protection/required_status_checks/contexts', Argument::type('array'), Schema\Repos\RemoveStatusCheckContexts\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(RemoveStatusCheckContexts::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']  = 'generated_null';
            $data['repo']   = 'generated_null';
            $data['branch'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Repos\RemoveStatusCheckContexts\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_422_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/repos/generated_null/generated_null/branches/generated_null/protection/required_status_checks/contexts', Argument::type('array'), Schema\Repos\RemoveStatusCheckContexts\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(RemoveStatusCheckContexts::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']  = 'generated_null';
            $data['repo']   = 'generated_null';
            $data['branch'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Repos\RemoveStatusCheckContexts\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
