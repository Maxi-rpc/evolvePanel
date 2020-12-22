<?php

class Redes extends CI_Model
{
	function __construct()
	{
        GET https://graph.facebook.com/v9.0/{ig-user-id}/insights
        ?metric={follower_count}
        &period={period}
        &since={since}
        &until={until}
        &access_token={access-token}

        $data = json_decode( file_get_contents('https://api.mercadolibre.com/users/226384143/'), true );

	}

	public function getInstagram()
	{
		$sql = $this->db->get_where('sector');
		return $sql->result();
    }

}