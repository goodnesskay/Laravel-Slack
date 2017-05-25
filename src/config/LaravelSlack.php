<?php

/*
 * This file is part of the Laravel Slack package.
 *
 * (c) Gooodness Toluwanimi Kayode <gtkbrain@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return[

    /**
     *  Gets the name of the slack team
     *
     */

    'slack_team_name'=> getenv('SLACK_TEAM_NAME'),

    /**
     *  Gets brief description of the team
     *  i.e What is being done by the team
     *
     */

    'team_description'=> getenv('TEAM_DESCRIPTION'),

    /**
     *  Gets the slack url of the team
     *  e.g test-group.slack.com
     *
     */

    'slack_team_url'=> getenv('SLACK_TEAM_URL'),

    /**
     *  Gets the slack API token of the team
     *  Get it at:
     *  https://api.slack.com/custom-integrations/legacy-tokens
     *
     */

    'slack_api_token'=> getenv('SLACK_API_TOKEN'),

    /**
     *  Gets the email of the team
     *
     */

    'slack_team_email'=> getenv('SLACK_TEAM_EMAIL'),

];