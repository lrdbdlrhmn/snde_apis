<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
$HEADERS = ['Authorization' => 'Basic MDI1ZGIwNjItMWMyNy00ZGU0LWE1YzYtODI4NTA5NDUwZjEw',
'Content-Type' => 'application/json'];
$body = ['app_id' => '71cb690b-651b-4c68-a127-f380f516f357'];
class PushController extends Controller
{
    /*
    //

    public function send_push()
    {
        Http::post('https://onesignal.com/api/v1/notifications',
        [
            'headers' => $HEADERS,
            'body' => $body,
            'log_level' => 'debug',
            'log_format' => 'curl'

        ]);
    # code...
    }

    public function new_report($report)
    {
    # code...
    $manager_ids = ManagersRegion::where('region_id', $report.['region_id']).pluck('manager_id');
    //$notification_ids = User::where("users.region_id = #{$report['region_id'] #{manager_ids.size > 0 ? "OR users.id IN (#{manager_ids.join(',')})" : ""}").where.not(notification_id: [nil, '', 'NULL']).limit(10).pluck(:notification_id).uniq
    $body['include_player_ids'] = [$notification_ids];
    $body['data'] = ['type' => 'new_report','id' => $report['id']];

    $body['headings'] = ['en' => 'بلاغ جديد' ];
    $body['contents'] = ['en' => 'تم الابلاغ عن مشكلة فى منطقتك' ];
    $push_body = json_encode($body);
    $this->send_push($push_body);
}

    public function to_one($player_id,$title,$body,$type='notify_one')
    {
        if (isset($player_id) || isset($body)) {
            # code...
            return;
        }
        $body['include_player_ids'] = [$player_id];
        $body['data'] = ['type' => $type];

        $body['headings'] = ['en' => $title];
        $body['contents'] = ['en' => $body];
        $push_body = json_encode($body);
        $this->send_push($push_body);
    # code...
        
    }
    */
}
