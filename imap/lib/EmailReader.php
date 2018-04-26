<?php

class EmailReader{
  public $conn;
  private $inbox;
  private $msg_cnt;
  private $server;
  private $user;
  private $pass;
  private $port;

  public function __construct(){
    $this->LoadConfigValues();
    $this->connect();
    $this->inbox();
  }
  public function connect(){
    $this->conn = imap_open($this->server, $this->user, $this->pass);
  }

  public function close(){
    $this->inbox = array();
    $this->msg_cnt = 0;
    imap_close($this->conn);
  }
  private function LoadConfigValues(){
    try{
      $config = parse_ini_file("appconfig.ini", 1);
      $this->user = $config['email_server']['username'];
      $this->pass = $config['email_server']['password'];
      $this->port = $config['email_server']['port'];
      $this->server = $config['email_server']['server'];

      if($this->user === null OR $this->pass ===null OR $this->port ===null OR $this->server === null)
      {
        throw new Exception(' Cannot read configuration values');
      }
    }
    catch (Exception $ex)
    {
      throw $ex;
    }
  }
  public function GetInboxCount(){
    return $this->msg_cnt;
  }
  public function GetMessage($msg_index = NULL)
  {
    if(count($this->inbox) <=0)
    {
      return array();

    }
    elseif(!is_null($msg_index) && isset($this->inbox[$msg_index]))
    {
      return $this->inbox[$msg_index];
    }
    return $this->inbox[0];
  }
  public function inbox()
  {
    $this->msg_cnt = imap_num_msg($this->conn);

    $in = array();
    for($i =1; $i <= $this->msg_cnt; $i++)
    {
      $in[] = array(
         'index' => $i,
         'header' => imap_headerinfo($this->conn, $i),
         'body_raw' => imap_body($this->conn, $i),
         'body_text' =>imap_fetchbody($this->conn, $i,1),
         'body_html' =>imap_fetchbody($this->conn, $i,2),
         'structure' => imap_fetchstructure($this->conn, $i)
      );
    }
    $this->inbox = $in;
  }
}
?>
