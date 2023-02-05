<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CommitComparison
{
    public const SCHEMA_JSON = '{"title":"Commit Comparison","required":["url","html_url","permalink_url","diff_url","patch_url","base_commit","merge_base_commit","status","ahead_by","behind_by","total_commits","commits"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/master...topic"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/compare\\/master...topic"]},"permalink_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/compare\\/octocat:bbcd538c8e72b8c175046e27cc8f907076331401...octocat:0328041d1152db8ae77652d1618a02e57f745f17"]},"diff_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/compare\\/master...topic.diff"]},"patch_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/compare\\/master...topic.patch"]},"base_commit":{"title":"Commit","required":["url","sha","node_id","html_url","comments_url","commit","author","committer","parents"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"sha":{"type":"string","examples":["6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"node_id":{"type":"string","examples":["MDY6Q29tbWl0NmRjYjA5YjViNTc4NzVmMzM0ZjYxYWViZWQ2OTVlMmU0MTkzZGI1ZQ=="]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/commit\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"comments_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/comments"]},"commit":{"required":["author","committer","comment_count","message","tree","url"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"author":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"committer":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"message":{"type":"string","examples":["Fix all the bugs"]},"comment_count":{"type":"integer","examples":[0]},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","examples":["827efc6d56897b048c772eb4087f854f46256132"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tree\\/827efc6d56897b048c772eb4087f854f46256132"]}}},"verification":{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}}},"author":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"committer":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"parents":{"type":"array","items":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/7638417db6d59f3c431d3e1f261cc637155684cd"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/commit\\/7638417db6d59f3c431d3e1f261cc637155684cd"]}}}},"stats":{"type":"object","properties":{"additions":{"type":"integer"},"deletions":{"type":"integer"},"total":{"type":"integer"}}},"files":{"type":"array","items":{"title":"Diff Entry","required":["additions","blob_url","changes","contents_url","deletions","filename","raw_url","sha","status"],"type":"object","properties":{"sha":{"type":"string","examples":["bbcd538c8e72b8c175046e27cc8f907076331401"]},"filename":{"type":"string","examples":["file1.txt"]},"status":{"enum":["added","removed","modified","renamed","copied","changed","unchanged"],"type":"string","examples":["added"]},"additions":{"type":"integer","examples":[103]},"deletions":{"type":"integer","examples":[21]},"changes":{"type":"integer","examples":[124]},"blob_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/blob\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"raw_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/raw\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"contents_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/file1.txt?ref=6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"patch":{"type":"string","examples":["@@ -132,7 +132,7 @@ module Test @@ -1000,7 +1000,7 @@ module Test"]},"previous_filename":{"type":"string","examples":["file.txt"]}},"description":"Diff Entry"}}},"description":"Commit"},"merge_base_commit":{"title":"Commit","required":["url","sha","node_id","html_url","comments_url","commit","author","committer","parents"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"sha":{"type":"string","examples":["6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"node_id":{"type":"string","examples":["MDY6Q29tbWl0NmRjYjA5YjViNTc4NzVmMzM0ZjYxYWViZWQ2OTVlMmU0MTkzZGI1ZQ=="]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/commit\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"comments_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/comments"]},"commit":{"required":["author","committer","comment_count","message","tree","url"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"author":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"committer":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"message":{"type":"string","examples":["Fix all the bugs"]},"comment_count":{"type":"integer","examples":[0]},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","examples":["827efc6d56897b048c772eb4087f854f46256132"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tree\\/827efc6d56897b048c772eb4087f854f46256132"]}}},"verification":{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}}},"author":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"committer":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"parents":{"type":"array","items":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/7638417db6d59f3c431d3e1f261cc637155684cd"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/commit\\/7638417db6d59f3c431d3e1f261cc637155684cd"]}}}},"stats":{"type":"object","properties":{"additions":{"type":"integer"},"deletions":{"type":"integer"},"total":{"type":"integer"}}},"files":{"type":"array","items":{"title":"Diff Entry","required":["additions","blob_url","changes","contents_url","deletions","filename","raw_url","sha","status"],"type":"object","properties":{"sha":{"type":"string","examples":["bbcd538c8e72b8c175046e27cc8f907076331401"]},"filename":{"type":"string","examples":["file1.txt"]},"status":{"enum":["added","removed","modified","renamed","copied","changed","unchanged"],"type":"string","examples":["added"]},"additions":{"type":"integer","examples":[103]},"deletions":{"type":"integer","examples":[21]},"changes":{"type":"integer","examples":[124]},"blob_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/blob\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"raw_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/raw\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"contents_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/file1.txt?ref=6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"patch":{"type":"string","examples":["@@ -132,7 +132,7 @@ module Test @@ -1000,7 +1000,7 @@ module Test"]},"previous_filename":{"type":"string","examples":["file.txt"]}},"description":"Diff Entry"}}},"description":"Commit"},"status":{"enum":["diverged","ahead","behind","identical"],"type":"string","examples":["ahead"]},"ahead_by":{"type":"integer","examples":[4]},"behind_by":{"type":"integer","examples":[5]},"total_commits":{"type":"integer","examples":[6]},"commits":{"type":"array","items":{"title":"Commit","required":["url","sha","node_id","html_url","comments_url","commit","author","committer","parents"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"sha":{"type":"string","examples":["6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"node_id":{"type":"string","examples":["MDY6Q29tbWl0NmRjYjA5YjViNTc4NzVmMzM0ZjYxYWViZWQ2OTVlMmU0MTkzZGI1ZQ=="]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/commit\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"comments_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/comments"]},"commit":{"required":["author","committer","comment_count","message","tree","url"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"author":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"committer":{"anyOf":[{"type":"null"},{"title":"Git User","type":"object","properties":{"name":{"type":"string","examples":["\\"Chris Wanstrath\\""]},"email":{"type":"string","examples":["\\"chris@ozmm.org\\""]},"date":{"type":"string","examples":["\\"2007-10-29T02:42:39.000-07:00\\""]}},"description":"Metaproperties for Git author\\/committer information."}]},"message":{"type":"string","examples":["Fix all the bugs"]},"comment_count":{"type":"integer","examples":[0]},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","examples":["827efc6d56897b048c772eb4087f854f46256132"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tree\\/827efc6d56897b048c772eb4087f854f46256132"]}}},"verification":{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}}},"author":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"committer":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"parents":{"type":"array","items":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/7638417db6d59f3c431d3e1f261cc637155684cd"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/commit\\/7638417db6d59f3c431d3e1f261cc637155684cd"]}}}},"stats":{"type":"object","properties":{"additions":{"type":"integer"},"deletions":{"type":"integer"},"total":{"type":"integer"}}},"files":{"type":"array","items":{"title":"Diff Entry","required":["additions","blob_url","changes","contents_url","deletions","filename","raw_url","sha","status"],"type":"object","properties":{"sha":{"type":"string","examples":["bbcd538c8e72b8c175046e27cc8f907076331401"]},"filename":{"type":"string","examples":["file1.txt"]},"status":{"enum":["added","removed","modified","renamed","copied","changed","unchanged"],"type":"string","examples":["added"]},"additions":{"type":"integer","examples":[103]},"deletions":{"type":"integer","examples":[21]},"changes":{"type":"integer","examples":[124]},"blob_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/blob\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"raw_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/raw\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"contents_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/file1.txt?ref=6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"patch":{"type":"string","examples":["@@ -132,7 +132,7 @@ module Test @@ -1000,7 +1000,7 @@ module Test"]},"previous_filename":{"type":"string","examples":["file.txt"]}},"description":"Diff Entry"}}},"description":"Commit"}},"files":{"type":"array","items":{"title":"Diff Entry","required":["additions","blob_url","changes","contents_url","deletions","filename","raw_url","sha","status"],"type":"object","properties":{"sha":{"type":"string","examples":["bbcd538c8e72b8c175046e27cc8f907076331401"]},"filename":{"type":"string","examples":["file1.txt"]},"status":{"enum":["added","removed","modified","renamed","copied","changed","unchanged"],"type":"string","examples":["added"]},"additions":{"type":"integer","examples":[103]},"deletions":{"type":"integer","examples":[21]},"changes":{"type":"integer","examples":[124]},"blob_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/blob\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"raw_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/raw\\/6dcb09b5b57875f334f61aebed695e2e4193db5e\\/file1.txt"]},"contents_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/file1.txt?ref=6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"patch":{"type":"string","examples":["@@ -132,7 +132,7 @@ module Test @@ -1000,7 +1000,7 @@ module Test"]},"previous_filename":{"type":"string","examples":["file.txt"]}},"description":"Diff Entry"}}},"description":"Commit Comparison"}';
    public const SCHEMA_TITLE = 'Commit Comparison';
    public const SCHEMA_DESCRIPTION = 'Commit Comparison';
    public readonly string $url;
    public readonly string $html_url;
    public readonly string $permalink_url;
    public readonly string $diff_url;
    public readonly string $patch_url;
    /**
     * Commit
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit $base_commit;
    /**
     * Commit
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit $merge_base_commit;
    public readonly string $status;
    public readonly int $ahead_by;
    public readonly int $behind_by;
    public readonly int $total_commits;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit>
     */
    public readonly array $commits;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DiffEntry>
     */
    public readonly array $files;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit> $commits
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DiffEntry> $files
     */
    public function __construct(string $url, string $html_url, string $permalink_url, string $diff_url, string $patch_url, object $base_commit, object $merge_base_commit, string $status, int $ahead_by, int $behind_by, int $total_commits, array $commits, array $files)
    {
        $this->url = $url;
        $this->html_url = $html_url;
        $this->permalink_url = $permalink_url;
        $this->diff_url = $diff_url;
        $this->patch_url = $patch_url;
        $this->base_commit = $base_commit;
        $this->merge_base_commit = $merge_base_commit;
        $this->status = $status;
        $this->ahead_by = $ahead_by;
        $this->behind_by = $behind_by;
        $this->total_commits = $total_commits;
        $this->commits = $commits;
        $this->files = $files;
    }
}
