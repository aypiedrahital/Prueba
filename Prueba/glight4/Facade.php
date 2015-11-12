<?php 
/**
* 
*/
class message 
{
	private $messageHeader;
	private $messageSender;
	private $messageBody;
	
	function addMessageHeader ($messageHeader)
	{
		$this->$messageHeader = $messageHeader;
		echo "Encabezado del mensaje creado";
	}

	function addMessageBody ($messageBody)
	{
		$this->$messageBody = $messageBody;
		echo "Cuerpo del mensaje creado";
	}

	function addMessageSender ($messageSender)
	{
		$this->$messageSender = $messageSender;
		echo "Remitente del mensaje creado";
	}
}


/**
* 
*/
class security 
{
	private $security;

	function implementSecurity($security)
	{
		$this->$security = $security;
		echo "Seguridad del mensaje implementada";
	}	
}


/**
* 
*/
class attachment
{
	private $attachment;

	function attachFile($attachment)
	{
		$this->$attachment = $attachment;
		echo "Se ha adjuntado el archivo satisfactoriamente";
	}
}


/**
* 
*/
class messageCreator 
{
	private $messageHeader;
	private $messageSender;
	private $messageBody;
	private $security;
	private $attachment;
	
	function __construct($messageHeader, $messageBody, $messageSender, $security, $attachment)
	{
		$this->$messageHeader = $messageHeader;
		$this->$messageBody = $messageBody;
		$this->$messageSender = $messageSender;
		$this->$security = $security;
		$this->$attachment = $attachment;
	}

	function newMessage()
	{
		$message->addMessageHeader($messageHeader);
		$message->addMessageBody($messageBody);
		$message->addMessageSender($messageSender);

		$attachment->attachFile($attachment);

		$security->implementSecurity($security);
	}
}

$messageHeader = new message();
$messageSender = new message();
$messageBody = new message();
$attachment = new attachment();
$security = new security();

$message1 = new messageCreator($messageHeader, $messageSender, $messageBody, $attachment, $security);

$message1->newMessage();

 ?>