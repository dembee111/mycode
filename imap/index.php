<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Advanced PHP</title>
</head>
<body>
  <?php
    require_once("lib/emailreader.php");
    //require_once(".lib/constants.php");

    $er = new EmailReader();
    print_r($er->GetMessage(1));
    echo br.br;

    echo "There are" . $er->GetInboxCount() . "messages";

    for($i=0;$i<$er->GetInboxCount();$i++)
    {
      $inboxarray = $er->GetMessage($i);
      echo br.br;
      echo "<h3>Message received from: </h3>".$er->GetMessage($i)['header']->fromaddress;
      echo br.br;
      echo "<h3>Message received on: </h3>".$er->GetMessage($i)['header']->date;
      echo br.br;
      echo "<h3>Subject:</h3>" .$er->GetMessage($i)['header']->subject;
      echo br.br;
      echo "<h3>Message in text format</h3>" .$er->GetMessage($i)['body_text'];
      echo br.br;
      echo "<h3>Message in html format:</h3>" .$er->GetMessage($i)['body_html'];
      echo "*****************************";
    }
    $er->close();
  ?>
</body>
