<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\Github\Operation\Reactions;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class CreateForTeamDiscussionCommentInOrgTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function t200td1f5a9d446c6cec2cf63545e8163e585()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), Schema\Reaction::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/orgs/generated_null/teams/generated_null/discussions/13/comments/13/reactions', \Prophecy\Argument::type('array'), Schema\Reactions\CreateForTeamDiscussionCommentInOrg\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Reactions\CreateForTeamDiscussionCommentInOrg::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['team_slug'] = 'generated_null';
            $data['discussion_number'] = 13;
            $data['comment_number'] = 13;
            return $data;
        })(json_decode(Schema\Reactions\CreateForTeamDiscussionCommentInOrg\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
    /**
     * @test
     */
    public function t201td1f5a9d446c6cec2cf63545e8163e585()
    {
        $response = new \React\Http\Message\Response(201, array('Content-Type' => 'application/json'), Schema\Reaction::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/orgs/generated_null/teams/generated_null/discussions/13/comments/13/reactions', \Prophecy\Argument::type('array'), Schema\Reactions\CreateForTeamDiscussionCommentInOrg\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Reactions\CreateForTeamDiscussionCommentInOrg::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['team_slug'] = 'generated_null';
            $data['discussion_number'] = 13;
            $data['comment_number'] = 13;
            return $data;
        })(json_decode(Schema\Reactions\CreateForTeamDiscussionCommentInOrg\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
