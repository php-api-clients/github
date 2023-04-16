<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForRepo;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class AddCustomLabelsToSelfHostedRunnerForRepoTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson\H200::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated_null/generated_null/actions/runners/13/labels', Argument::type('array'), Schema\Actions\AddCustomLabelsToSelfHostedRunnerForRepo\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(AddCustomLabelsToSelfHostedRunnerForRepo::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated_null';
            $data['repo']      = 'generated_null';
            $data['runner_id'] = 13;

            return $data;
        })(json_decode(Schema\Actions\AddCustomLabelsToSelfHostedRunnerForRepo\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
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
        $browser->request('POST', '/repos/generated_null/generated_null/actions/runners/13/labels', Argument::type('array'), Schema\Actions\AddCustomLabelsToSelfHostedRunnerForRepo\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(AddCustomLabelsToSelfHostedRunnerForRepo::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated_null';
            $data['repo']      = 'generated_null';
            $data['runner_id'] = 13;

            return $data;
        })(json_decode(Schema\Actions\AddCustomLabelsToSelfHostedRunnerForRepo\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_422_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ValidationErrorSimple::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\ValidationErrorSimple::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated_null/generated_null/actions/runners/13/labels', Argument::type('array'), Schema\Actions\AddCustomLabelsToSelfHostedRunnerForRepo\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(AddCustomLabelsToSelfHostedRunnerForRepo::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated_null';
            $data['repo']      = 'generated_null';
            $data['runner_id'] = 13;

            return $data;
        })(json_decode(Schema\Actions\AddCustomLabelsToSelfHostedRunnerForRepo\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
