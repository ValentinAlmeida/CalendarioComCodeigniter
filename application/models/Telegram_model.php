<?php

class Telegram_model extends CI_Model
{
    public function salva($text)
    {
        $this->db->insert_batch('telegram', $text);
    }
}