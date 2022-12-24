<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C7E88818B96F4B827A88Bdffeb546E221
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Milestone","required":["closed_issues","creator","description","due_on","closed_at","id","node_id","labels_url","html_url","number","open_issues","state","title","url","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones\\/1"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/milestones\\/v1.0"]},"labels_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones\\/1\\/labels"]},"id":{"type":"integer","examples":[1002604]},"node_id":{"type":"string","examples":["MDk6TWlsZXN0b25lMTAwMjYwNA=="]},"number":{"type":"integer","description":"The number of the milestone.","examples":[42]},"state":{"enum":["open","closed"],"type":"string","description":"The state of the milestone.","default":"open","examples":["open"]},"title":{"type":"string","description":"The title of the milestone.","examples":["v1.0"]},"description":{"type":["string","null"],"examples":["Tracking milestone for version 1.0"]},"creator":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"open_issues":{"type":"integer","examples":[4]},"closed_issues":{"type":"integer","examples":[8]},"created_at":{"type":"string","format":"date-time","examples":["2011-04-10T20:09:31Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2014-03-03T18:58:10Z"]},"closed_at":{"type":["string","null"],"format":"date-time","examples":["2013-02-12T13:22:01Z"]},"due_on":{"type":["string","null"],"format":"date-time","examples":["2012-10-09T23:39:01Z"]}},"description":"A collection of related issues and pull requests."}}';
    public const SCHEMA_TITLE = 'c_7e88818b96f4b827a88bdffeb546e221';
    public const SCHEMA_DESCRIPTION = '';
}