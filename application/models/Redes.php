<?php

class Redes extends CI_Model
{
	function __construct()
	{
        $instagramDat = [
            $id = 7693982731,
        ];

        curl -X POST \
        https://api.instagram.com/oauth/access_token \
        -F client_id=1353466041668311 \
        -F client_secret=d6adc789137e3c108c53713b99347805 \
        -F grant_type=authorization_code \
        -F redirect_uri=https://teamevolve.gg/ \
        -F code={code}


        https://api.instagram.com/oauth/authorize
        ?client_id=1353466041668311
        &redirect_uri=https://teamevolve.gg/
        &scope=user_profile,user_media
        &response_type=code

        GET  "https://graph.facebook.com/v9.0/7693982731/insights"
        ?metric={follower_count}
        &period={day}
        //&since={since}
        //&until={until}
        &access_token={access-token}

        $data = json_decode( file_get_contents('https://graph.facebook.com/v9.0/7693982731/insights'), true );

	}

	public function getInstagram()
	{
		$sql = $this->db->get_where('sector');
		return $sql->result();
    }

}