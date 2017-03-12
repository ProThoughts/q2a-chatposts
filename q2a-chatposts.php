<?php

class q2a_chatposts {

    function allow_template($template) {
        $allow = false;

        switch ($template) {
            case 'account':
            case'activity':
            case'admin':
            case'ask' :
            case'categories' :
            case'custom' :
            case'favorites':
            case'feedback' :
            case'hot' :
            case'ip' :
            case'login':
            case'message':
            case'qa' :
            case'question':
            case'questions':
            case'register' :
            case'search' :
            case'tag' :
            case'tags' :
            case'unanswered':
            case'updates' :
            case'user' :
            case'users' :
                $allow = true;
                break;
        }

        return $allow;
    }

    function allow_region($region) {
        return true;
    }
    function output_widget() {
					$numberchats =  qa_db_read_one_value(
					qa_db_query_sub(
					'SELECT COUNT(postid) FROM ^chat_posts'));
			          echo "<h4 style='width: 250px; text-align: center;'>Total Chats:&nbsp;" . $numberchats . "</h4>";
	}
}

