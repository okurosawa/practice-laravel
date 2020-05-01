<?php

// Parent Class
class Ticket
{
    private $start_date;
    private $end_date;
    private $ticket_type;

    public function __construct($date = null)
    {
        $this->start_date = $date ?: date("Y-m-d");
    }

    public function set_start_date($date)
    {
        $this->start_date = $date;
    }

    public function get_start_date()
    {
        return $this->start_date;
    }
}

// Child Class
class MuseumTicket extends Ticket
{
    private $exhibits_list = [
        "car",
        "art"
    ];

    public function get_exhibits_list()
    {
        return $this->exhibits_list;
    }
}

$museum_ticket = new MuseumTicket();

// $museum_ticket->set_start_date("2020-04-20");
echo "start date is " . $museum_ticket->get_start_date();
