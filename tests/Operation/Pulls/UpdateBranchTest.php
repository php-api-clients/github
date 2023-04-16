<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Pulls;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Pulls\UpdateBranch;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class UpdateBranchTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_202_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], Schema\Operation\Pulls\UpdateBranch\Response\Applicationjson\H202::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated_null/generated_null/pulls/13/update-branch', Argument::type('array'), Schema\Pulls\UpdateBranch\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateBranch::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated_null';
            $data['repo']        = 'generated_null';
            $data['pull_number'] = 13;

            return $data;
        })(json_decode(Schema\Pulls\UpdateBranch\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
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
        $browser->request('PUT', '/repos/generated_null/generated_null/pulls/13/update-branch', Argument::type('array'), Schema\Pulls\UpdateBranch\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateBranch::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated_null';
            $data['repo']        = 'generated_null';
            $data['pull_number'] = 13;

            return $data;
        })(json_decode(Schema\Pulls\UpdateBranch\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_403_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated_null/generated_null/pulls/13/update-branch', Argument::type('array'), Schema\Pulls\UpdateBranch\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateBranch::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated_null';
            $data['repo']        = 'generated_null';
            $data['pull_number'] = 13;

            return $data;
        })(json_decode(Schema\Pulls\UpdateBranch\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
