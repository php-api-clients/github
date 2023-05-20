<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Teams;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Async\await;
use function React\Promise\resolve;

final class GetDiscussionCommentInOrgTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function call_httpCode_200_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\TeamDiscussionComment::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/teams/generated/discussions/17/comments/14', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Teams\GetDiscussionCommentInOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']               = 'generated';
            $data['team_slug']         = 'generated';
            $data['discussion_number'] = 17;
            $data['comment_number']    = 14;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_200_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\TeamDiscussionComment::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated/teams/generated/discussions/17/comments/14', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->teams()->getDiscussionCommentInOrg('generated', 'generated', 17, 14));
    }
}
