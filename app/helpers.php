<?php

function polMonth($posts)
{
    $month = $posts['created_at'];
    $month_sub = substr($month, 5, 2);
    $months_arr = array('01' => 'STY', '02' => 'LUT', '03' => 'MAR',
        '04' => 'KWI', '05' => 'MAJ', '06' => 'CZE',
        '07' => 'LIP', '08' => 'SIE', '09' => 'WRZE',
        '10' => 'PAŹ', '11' => 'LIS', '12' => 'GRU');

    $pol_month = $months_arr[$month_sub];

    return $pol_month;
}

function polDay($posts)
{
    $month = $posts['created_at'];
    $new_day = substr($month, 8, 2);
    return $new_day;
}

function year($posts)
{
    return $year = substr($posts['created_at'], 0, 4);
}

function postTruncate($posts)
{
    $data = strip_tags($posts['body']);
    if (mb_strlen($data) > 120) {
        return $truncated = substr($data, 0, strrpos(substr($data, 0, 120), ' ')) . "...";
    }
}

function categoryName($posts, $categories)
{
    $entry_category = $posts['category_id'];

    foreach ($categories as $key => $val) {
        if ($val['id'] === $entry_category) {
            return $val['name'];
        }
    }
}

function iframeSearch($posts)
{
    $data = ($posts['body']);
    $matches = [];
    preg_match('/(https?\:\/\/[^\/]+\/.+)\?/', $data, $matches);
    $movie = ($matches[1]);
    return $movie;
}

function fullMonth($post)
{
    $originalMonth = $post['month'];

    $months_arr = array('1' => 'Styczeń', '2' => 'Luty', '3' => 'Marzec',
        '4' => 'Kwiecień', '5' => 'Maj', '6' => 'Czerwiec',
        '07' => 'Lipiec', '8' => 'Sierpień', '9' => 'Wrzesień',
        '10' => 'Październik', '11' => 'Listopad', '12' => 'Grudzień');

    $fullMonth = $months_arr[$originalMonth];

    return $fullMonth;
}

function commentsNumber($chatterPosts)
{
    $commentsNumber = DB::table('chatter_post')
        ->where('chatter_discussion_id', '=', $chatterPosts['chatter_discussion_id'])
        ->count();
    return $commentsNumber;
}
