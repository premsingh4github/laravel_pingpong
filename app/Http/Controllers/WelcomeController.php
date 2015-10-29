<?php namespace App\Http\Controllers;
	use Illuminate\Http\Request;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
	// by prem kumar singh @ 2015/10/29
	public function contact(Request $request){
		if($request['submit']){
			// multiple recipients
			$to  = 'premsingh57@gmail.com' . ', '; // note the comma
			$to .= 'info@omnitextsolution.com';

			// subject
			$subject = 'Omni Text Solution Contact';

			// message
			$message = "
			<html>
			<head>
			  <title>Omni Text Solution Contact</title>
			</head>
			<body>
			  
			  <table>
			    
			    <tr>
			      <td><b>Name:</b></td><td>{$request['fName']} {$request['lName']}</td>
			    </tr>
			    <tr>
			      <td><b>Email:</b></td><td>{$request['email']}</td>
			    </tr>
			    <tr>
			      <td><b>Message:</b></td><td>{$request['message']}</td>
			    </tr>
			  </table>
			</body>
			</html>
			";

			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Additional headers
			// $headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
			 $headers .= "From: {$request['email']}" . "\r\n";
			// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
			// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

			// Mail it
			mail($to, $subject, $message, $headers);
			return view('contact')->with('sent',1);
		}
		return view('contact')->with('sent',0);
	}
	public function register(){
		return view('register');
	}
	

}
