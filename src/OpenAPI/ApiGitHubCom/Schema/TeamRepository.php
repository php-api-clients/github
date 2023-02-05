<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TeamRepository
{
    public const SCHEMA_JSON = '{"title":"Team Repository","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url","clone_url","default_branch","forks","forks_count","git_url","has_downloads","has_issues","has_projects","has_wiki","has_pages","homepage","language","archived","disabled","mirror_url","open_issues","open_issues_count","license","pushed_at","size","ssh_url","stargazers_count","svn_url","watchers","watchers_count","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the repository","examples":[42]},"node_id":{"type":"string","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","description":"The name of the repository.","examples":["Team Environment"]},"full_name":{"type":"string","examples":["octocat\\/Hello-World"]},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"forks":{"type":"integer"},"permissions":{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"}}},"role_name":{"type":"string","examples":["admin"]},"owner":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"private":{"type":"boolean","description":"Whether the repository is private or public.","default":false},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World"]},"description":{"type":["string","null"],"examples":["This your first repo!"]},"fork":{"type":"boolean"},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"]},"archive_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"]},"assignees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"]},"blobs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"]},"branches_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"]},"collaborators_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"]},"comments_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"]},"commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"]},"compare_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"]},"contents_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"]},"contributors_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"]},"deployments_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"]},"downloads_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"]},"events_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"]},"forks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"]},"git_commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"]},"git_refs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"]},"git_tags_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"]},"git_url":{"type":"string","examples":["git:github.com\\/octocat\\/Hello-World.git"]},"issue_comment_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"]},"issue_events_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"]},"issues_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"]},"keys_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"]},"labels_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"]},"languages_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"]},"merges_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"]},"milestones_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"]},"notifications_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"]},"pulls_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"]},"releases_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"]},"ssh_url":{"type":"string","examples":["git@github.com:octocat\\/Hello-World.git"]},"stargazers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"]},"statuses_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"]},"subscribers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"]},"subscription_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"]},"tags_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"]},"teams_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"]},"trees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"]},"clone_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World.git"]},"mirror_url":{"type":["string","null"],"format":"uri","examples":["git:git.example.com\\/octocat\\/Hello-World"]},"hooks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"]},"svn_url":{"type":"string","format":"uri","examples":["https:\\/\\/svn.github.com\\/octocat\\/Hello-World"]},"homepage":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/github.com"]},"language":{"type":["string","null"]},"forks_count":{"type":"integer","examples":[9]},"stargazers_count":{"type":"integer","examples":[80]},"watchers_count":{"type":"integer","examples":[80]},"size":{"type":"integer","examples":[108]},"default_branch":{"type":"string","description":"The default branch of the repository.","examples":["master"]},"open_issues_count":{"type":"integer","examples":[0]},"is_template":{"type":"boolean","description":"Whether this repository acts as a template that can be used to generate new repositories.","default":false,"examples":[true]},"topics":{"type":"array","items":{"type":"string"}},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true,"examples":[true]},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true,"examples":[true]},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true,"examples":[true]},"has_pages":{"type":"boolean"},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true,"examples":[true]},"archived":{"type":"boolean","description":"Whether the repository is archived.","default":false},"disabled":{"type":"boolean","description":"Returns whether or not this repository disabled."},"visibility":{"type":"string","description":"The repository visibility: public, private, or internal.","default":"public"},"pushed_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:06:43Z"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:01:12Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:14:43Z"]},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true,"examples":[true]},"template_repository":{"anyOf":[{"type":"null"},{"title":"Repository","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url","clone_url","default_branch","forks","forks_count","git_url","has_downloads","has_issues","has_projects","has_wiki","has_pages","homepage","language","archived","disabled","mirror_url","open_issues","open_issues_count","license","pushed_at","size","ssh_url","stargazers_count","svn_url","watchers","watchers_count","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the repository","examples":[42]},"node_id":{"type":"string","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","description":"The name of the repository.","examples":["Team Environment"]},"full_name":{"type":"string","examples":["octocat\\/Hello-World"]},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"organization":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"forks":{"type":"integer"},"permissions":{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"}}},"owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"private":{"type":"boolean","description":"Whether the repository is private or public.","default":false},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World"]},"description":{"type":["string","null"],"examples":["This your first repo!"]},"fork":{"type":"boolean"},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"]},"archive_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"]},"assignees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"]},"blobs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"]},"branches_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"]},"collaborators_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"]},"comments_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"]},"commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"]},"compare_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"]},"contents_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"]},"contributors_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"]},"deployments_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"]},"downloads_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"]},"events_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"]},"forks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"]},"git_commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"]},"git_refs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"]},"git_tags_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"]},"git_url":{"type":"string","examples":["git:github.com\\/octocat\\/Hello-World.git"]},"issue_comment_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"]},"issue_events_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"]},"issues_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"]},"keys_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"]},"labels_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"]},"languages_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"]},"merges_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"]},"milestones_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"]},"notifications_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"]},"pulls_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"]},"releases_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"]},"ssh_url":{"type":"string","examples":["git@github.com:octocat\\/Hello-World.git"]},"stargazers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"]},"statuses_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"]},"subscribers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"]},"subscription_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"]},"tags_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"]},"teams_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"]},"trees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"]},"clone_url":{"type":"string","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World.git"]},"mirror_url":{"type":["string","null"],"format":"uri","examples":["git:git.example.com\\/octocat\\/Hello-World"]},"hooks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"]},"svn_url":{"type":"string","format":"uri","examples":["https:\\/\\/svn.github.com\\/octocat\\/Hello-World"]},"homepage":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/github.com"]},"language":{"type":["string","null"]},"forks_count":{"type":"integer","examples":[9]},"stargazers_count":{"type":"integer","examples":[80]},"watchers_count":{"type":"integer","examples":[80]},"size":{"type":"integer","description":"The size of the repository. Size is calculated hourly. When a repository is initially created, the size is 0.","examples":[108]},"default_branch":{"type":"string","description":"The default branch of the repository.","examples":["master"]},"open_issues_count":{"type":"integer","examples":[0]},"is_template":{"type":"boolean","description":"Whether this repository acts as a template that can be used to generate new repositories.","default":false,"examples":[true]},"topics":{"type":"array","items":{"type":"string"}},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true,"examples":[true]},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true,"examples":[true]},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true,"examples":[true]},"has_pages":{"type":"boolean"},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true,"examples":[true]},"has_discussions":{"type":"boolean","description":"Whether discussions are enabled.","default":false,"examples":[true]},"archived":{"type":"boolean","description":"Whether the repository is archived.","default":false},"disabled":{"type":"boolean","description":"Returns whether or not this repository disabled."},"visibility":{"type":"string","description":"The repository visibility: public, private, or internal.","default":"public"},"pushed_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:06:43Z"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:01:12Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:14:43Z"]},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true,"examples":[true]},"template_repository":{"type":["object","null"],"properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"full_name":{"type":"string"},"owner":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string"},"gravatar_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"organizations_url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"received_events_url":{"type":"string"},"type":{"type":"string"},"site_admin":{"type":"boolean"}}},"private":{"type":"boolean"},"html_url":{"type":"string"},"description":{"type":"string"},"fork":{"type":"boolean"},"url":{"type":"string"},"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"forks_url":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"git_url":{"type":"string"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"notifications_url":{"type":"string"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"ssh_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"clone_url":{"type":"string"},"mirror_url":{"type":"string"},"hooks_url":{"type":"string"},"svn_url":{"type":"string"},"homepage":{"type":"string"},"language":{"type":"string"},"forks_count":{"type":"integer"},"stargazers_count":{"type":"integer"},"watchers_count":{"type":"integer"},"size":{"type":"integer"},"default_branch":{"type":"string"},"open_issues_count":{"type":"integer"},"is_template":{"type":"boolean"},"topics":{"type":"array","items":{"type":"string"}},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_downloads":{"type":"boolean"},"archived":{"type":"boolean"},"disabled":{"type":"boolean"},"visibility":{"type":"string"},"pushed_at":{"type":"string"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"permissions":{"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"allow_rebase_merge":{"type":"boolean"},"temp_clone_token":{"type":"string"},"allow_squash_merge":{"type":"boolean"},"allow_auto_merge":{"type":"boolean"},"delete_branch_on_merge":{"type":"boolean"},"allow_update_branch":{"type":"boolean"},"use_squash_pr_title_as_default":{"type":"boolean"},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."},"allow_merge_commit":{"type":"boolean"},"subscribers_count":{"type":"integer"},"network_count":{"type":"integer"}}},"temp_clone_token":{"type":"string"},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true,"examples":[true]},"allow_auto_merge":{"type":"boolean","description":"Whether to allow Auto-merge to be used on pull requests.","default":false,"examples":[false]},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false,"examples":[false]},"allow_update_branch":{"type":"boolean","description":"Whether or not a pull request head branch that is behind its base branch can always be updated even if it is not required to be up to date before merging.","default":false,"examples":[false]},"use_squash_pr_title_as_default":{"type":"boolean","description":"Whether a squash merge commit can use the pull request title as default. **This property has been deprecated. Please use `squash_merge_commit_title` instead.","default":false,"deprecated":true},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true,"examples":[true]},"allow_forking":{"type":"boolean","description":"Whether to allow forking this repo"},"web_commit_signoff_required":{"type":"boolean","description":"Whether to require contributors to sign off on web-based commits","default":false},"subscribers_count":{"type":"integer"},"network_count":{"type":"integer"},"open_issues":{"type":"integer"},"watchers":{"type":"integer"},"master_branch":{"type":"string"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:42Z\\""]},"anonymous_access_enabled":{"type":"boolean","description":"Whether anonymous git access is enabled for this repository"}},"description":"A repository on GitHub."}]},"temp_clone_token":{"type":"string"},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true,"examples":[true]},"allow_auto_merge":{"type":"boolean","description":"Whether to allow Auto-merge to be used on pull requests.","default":false,"examples":[false]},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false,"examples":[false]},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true,"examples":[true]},"allow_forking":{"type":"boolean","description":"Whether to allow forking this repo","default":false,"examples":[false]},"web_commit_signoff_required":{"type":"boolean","description":"Whether to require contributors to sign off on web-based commits","default":false,"examples":[false]},"subscribers_count":{"type":"integer"},"network_count":{"type":"integer"},"open_issues":{"type":"integer"},"watchers":{"type":"integer"},"master_branch":{"type":"string"}},"description":"A team\'s access to a repository."}';
    public const SCHEMA_TITLE = 'Team Repository';
    public const SCHEMA_DESCRIPTION = 'A team\'s access to a repository.';
    /**
     * Unique identifier of the repository
     */
    public readonly int $id;
    public readonly string $node_id;
    /**
     * The name of the repository.
     */
    public readonly string $name;
    public readonly string $full_name;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository\License $license;
    public readonly int $forks;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository\Permissions $permissions;
    public readonly ?string $role_name;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository\Owner $owner;
    /**
     * Whether the repository is private or public.
     */
    public readonly bool $private;
    public readonly string $html_url;
    public readonly ?string $description;
    public readonly bool $fork;
    public readonly string $url;
    public readonly string $archive_url;
    public readonly string $assignees_url;
    public readonly string $blobs_url;
    public readonly string $branches_url;
    public readonly string $collaborators_url;
    public readonly string $comments_url;
    public readonly string $commits_url;
    public readonly string $compare_url;
    public readonly string $contents_url;
    public readonly string $contributors_url;
    public readonly string $deployments_url;
    public readonly string $downloads_url;
    public readonly string $events_url;
    public readonly string $forks_url;
    public readonly string $git_commits_url;
    public readonly string $git_refs_url;
    public readonly string $git_tags_url;
    public readonly string $git_url;
    public readonly string $issue_comment_url;
    public readonly string $issue_events_url;
    public readonly string $issues_url;
    public readonly string $keys_url;
    public readonly string $labels_url;
    public readonly string $languages_url;
    public readonly string $merges_url;
    public readonly string $milestones_url;
    public readonly string $notifications_url;
    public readonly string $pulls_url;
    public readonly string $releases_url;
    public readonly string $ssh_url;
    public readonly string $stargazers_url;
    public readonly string $statuses_url;
    public readonly string $subscribers_url;
    public readonly string $subscription_url;
    public readonly string $tags_url;
    public readonly string $teams_url;
    public readonly string $trees_url;
    public readonly string $clone_url;
    public readonly ?string $mirror_url;
    public readonly string $hooks_url;
    public readonly string $svn_url;
    public readonly ?string $homepage;
    public readonly ?string $language;
    public readonly int $forks_count;
    public readonly int $stargazers_count;
    public readonly int $watchers_count;
    public readonly int $size;
    /**
     * The default branch of the repository.
     */
    public readonly string $default_branch;
    public readonly int $open_issues_count;
    /**
     * Whether this repository acts as a template that can be used to generate new repositories.
     */
    public readonly ?bool $is_template;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository\Topics>
     */
    public readonly array $topics;
    /**
     * Whether issues are enabled.
     */
    public readonly bool $has_issues;
    /**
     * Whether projects are enabled.
     */
    public readonly bool $has_projects;
    /**
     * Whether the wiki is enabled.
     */
    public readonly bool $has_wiki;
    public readonly bool $has_pages;
    /**
     * Whether downloads are enabled.
     */
    public readonly bool $has_downloads;
    /**
     * Whether the repository is archived.
     */
    public readonly bool $archived;
    /**
     * Returns whether or not this repository disabled.
     */
    public readonly bool $disabled;
    /**
     * The repository visibility: public, private, or internal.
     */
    public readonly ?string $visibility;
    public readonly ?string $pushed_at;
    public readonly ?string $created_at;
    public readonly ?string $updated_at;
    /**
     * Whether to allow rebase merges for pull requests.
     */
    public readonly ?bool $allow_rebase_merge;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository\TemplateRepository $template_repository;
    public readonly ?string $temp_clone_token;
    /**
     * Whether to allow squash merges for pull requests.
     */
    public readonly ?bool $allow_squash_merge;
    /**
     * Whether to allow Auto-merge to be used on pull requests.
     */
    public readonly ?bool $allow_auto_merge;
    /**
     * Whether to delete head branches when pull requests are merged
     */
    public readonly ?bool $delete_branch_on_merge;
    /**
     * Whether to allow merge commits for pull requests.
     */
    public readonly ?bool $allow_merge_commit;
    /**
     * Whether to allow forking this repo
     */
    public readonly ?bool $allow_forking;
    /**
     * Whether to require contributors to sign off on web-based commits
     */
    public readonly ?bool $web_commit_signoff_required;
    public readonly ?int $subscribers_count;
    public readonly ?int $network_count;
    public readonly int $open_issues;
    public readonly int $watchers;
    public readonly ?string $master_branch;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository\Topics> $topics
     */
    public function __construct(int $id, string $node_id, string $name, string $full_name, mixed $license, int $forks, object $permissions, string $role_name, mixed $owner, bool $private, string $html_url, string $description, bool $fork, string $url, string $archive_url, string $assignees_url, string $blobs_url, string $branches_url, string $collaborators_url, string $comments_url, string $commits_url, string $compare_url, string $contents_url, string $contributors_url, string $deployments_url, string $downloads_url, string $events_url, string $forks_url, string $git_commits_url, string $git_refs_url, string $git_tags_url, string $git_url, string $issue_comment_url, string $issue_events_url, string $issues_url, string $keys_url, string $labels_url, string $languages_url, string $merges_url, string $milestones_url, string $notifications_url, string $pulls_url, string $releases_url, string $ssh_url, string $stargazers_url, string $statuses_url, string $subscribers_url, string $subscription_url, string $tags_url, string $teams_url, string $trees_url, string $clone_url, string $mirror_url, string $hooks_url, string $svn_url, string $homepage, string $language, int $forks_count, int $stargazers_count, int $watchers_count, int $size, string $default_branch, int $open_issues_count, bool $is_template, array $topics, bool $has_issues, bool $has_projects, bool $has_wiki, bool $has_pages, bool $has_downloads, bool $archived, bool $disabled, string $visibility, string $pushed_at, string $created_at, string $updated_at, bool $allow_rebase_merge, mixed $template_repository, string $temp_clone_token, bool $allow_squash_merge, bool $allow_auto_merge, bool $delete_branch_on_merge, bool $allow_merge_commit, bool $allow_forking, bool $web_commit_signoff_required, int $subscribers_count, int $network_count, int $open_issues, int $watchers, string $master_branch)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->name = $name;
        $this->full_name = $full_name;
        $this->license = $license;
        $this->forks = $forks;
        $this->permissions = $permissions;
        $this->role_name = $role_name;
        $this->owner = $owner;
        $this->private = $private;
        $this->html_url = $html_url;
        $this->description = $description;
        $this->fork = $fork;
        $this->url = $url;
        $this->archive_url = $archive_url;
        $this->assignees_url = $assignees_url;
        $this->blobs_url = $blobs_url;
        $this->branches_url = $branches_url;
        $this->collaborators_url = $collaborators_url;
        $this->comments_url = $comments_url;
        $this->commits_url = $commits_url;
        $this->compare_url = $compare_url;
        $this->contents_url = $contents_url;
        $this->contributors_url = $contributors_url;
        $this->deployments_url = $deployments_url;
        $this->downloads_url = $downloads_url;
        $this->events_url = $events_url;
        $this->forks_url = $forks_url;
        $this->git_commits_url = $git_commits_url;
        $this->git_refs_url = $git_refs_url;
        $this->git_tags_url = $git_tags_url;
        $this->git_url = $git_url;
        $this->issue_comment_url = $issue_comment_url;
        $this->issue_events_url = $issue_events_url;
        $this->issues_url = $issues_url;
        $this->keys_url = $keys_url;
        $this->labels_url = $labels_url;
        $this->languages_url = $languages_url;
        $this->merges_url = $merges_url;
        $this->milestones_url = $milestones_url;
        $this->notifications_url = $notifications_url;
        $this->pulls_url = $pulls_url;
        $this->releases_url = $releases_url;
        $this->ssh_url = $ssh_url;
        $this->stargazers_url = $stargazers_url;
        $this->statuses_url = $statuses_url;
        $this->subscribers_url = $subscribers_url;
        $this->subscription_url = $subscription_url;
        $this->tags_url = $tags_url;
        $this->teams_url = $teams_url;
        $this->trees_url = $trees_url;
        $this->clone_url = $clone_url;
        $this->mirror_url = $mirror_url;
        $this->hooks_url = $hooks_url;
        $this->svn_url = $svn_url;
        $this->homepage = $homepage;
        $this->language = $language;
        $this->forks_count = $forks_count;
        $this->stargazers_count = $stargazers_count;
        $this->watchers_count = $watchers_count;
        $this->size = $size;
        $this->default_branch = $default_branch;
        $this->open_issues_count = $open_issues_count;
        $this->is_template = $is_template;
        $this->topics = $topics;
        $this->has_issues = $has_issues;
        $this->has_projects = $has_projects;
        $this->has_wiki = $has_wiki;
        $this->has_pages = $has_pages;
        $this->has_downloads = $has_downloads;
        $this->archived = $archived;
        $this->disabled = $disabled;
        $this->visibility = $visibility;
        $this->pushed_at = $pushed_at;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->allow_rebase_merge = $allow_rebase_merge;
        $this->template_repository = $template_repository;
        $this->temp_clone_token = $temp_clone_token;
        $this->allow_squash_merge = $allow_squash_merge;
        $this->allow_auto_merge = $allow_auto_merge;
        $this->delete_branch_on_merge = $delete_branch_on_merge;
        $this->allow_merge_commit = $allow_merge_commit;
        $this->allow_forking = $allow_forking;
        $this->web_commit_signoff_required = $web_commit_signoff_required;
        $this->subscribers_count = $subscribers_count;
        $this->network_count = $network_count;
        $this->open_issues = $open_issues;
        $this->watchers = $watchers;
        $this->master_branch = $master_branch;
    }
}
