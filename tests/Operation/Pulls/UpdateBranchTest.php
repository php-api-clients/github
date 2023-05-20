<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Pulls;

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
use function React\Async\await;
use function React\Promise\resolve;

final class UpdateBranchTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function call_httpCode_202_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated/generated/pulls/11/update-branch', Argument::type('array'), Schema\Pulls\UpdateBranch\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Pulls\UpdateBranch::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated';
            $data['repo']        = 'generated';
            $data['pull_number'] = 11;

            return $data;
        })(json_decode(Schema\Pulls\UpdateBranch\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_202_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated/generated/pulls/11/update-branch', Argument::type('array'), Schema\Pulls\UpdateBranch\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->pulls()->updateBranch('generated', 'generated', 11, json_decode(Schema\Pulls\UpdateBranch\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function call_httpCode_422_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated/generated/pulls/11/update-branch', Argument::type('array'), Schema\Pulls\UpdateBranch\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Pulls\UpdateBranch::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated';
            $data['repo']        = 'generated';
            $data['pull_number'] = 11;

            return $data;
        })(json_decode(Schema\Pulls\UpdateBranch\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_422_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated/generated/pulls/11/update-branch', Argument::type('array'), Schema\Pulls\UpdateBranch\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->pulls()->updateBranch('generated', 'generated', 11, json_decode(Schema\Pulls\UpdateBranch\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function call_httpCode_403_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated/generated/pulls/11/update-branch', Argument::type('array'), Schema\Pulls\UpdateBranch\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Pulls\UpdateBranch::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated';
            $data['repo']        = 'generated';
            $data['pull_number'] = 11;

            return $data;
        })(json_decode(Schema\Pulls\UpdateBranch\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_403_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated/generated/pulls/11/update-branch', Argument::type('array'), Schema\Pulls\UpdateBranch\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->pulls()->updateBranch('generated', 'generated', 11, json_decode(Schema\Pulls\UpdateBranch\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
