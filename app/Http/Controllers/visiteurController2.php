<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Mail;

//Load Composer's autoloader
require 'vendor/autoload.php';

use App\Models\visiteurs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class visiteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function newsletter()
    {
        $visitors = DB::select('select * from visiteurs');
        return view('pages.newsletter', compact('visitors'));
    }

    public function deleteVisitor($id)
    {
        DB::Delete('delete from visiteurs where id_visiteur=?', [$id]);
        return redirect()->route('newsletter')->with('success', 'You have remove this visitor succefully !');
    }


    public function sendMessage(Request $request)
    {
       
        include_once 'verifications.php';
        $email = $request->input('email');
       

        $vmail = new verifyEmail();
        $vmail->setStreamTimeoutWait(20);
        $vmail->Debug = FALSE;
        $vmail->Debugoutput = 'html';
        $vmail->setEmailFrom('contact.ask.avocats@gmail.com');

        $e = strval($email);

        if ($vmail->check($e)) {



            try {

                \Mail::send('mail', array(
                    'name' => $request->get('nom'),
                    'email' => $request->get('email'),
                    'subject' => $request->get('subject'),
                    'user_query' => $request->get('message'),
                ), function($message) use ($request){
                    $message->from($request->email);
                    $message->to('contact@ask-avocats.com', 'Admin')->subject($request->get('subject'));
                });

                return redirect()->back()->with('success', 'Felicitation message envoyé ');

            } catch (Exception $e) {

                dd($e);

                return redirect()->back()->with('error', 'Message non envoyé ! ');
            }
        } else{
            return redirect()->back()->with('error', 'Email Invalide ');}
            
    }

    public function sendNewletters(Request $request)
    {
        /// Recuperation de la pièce jointe pour le mettre dans le dossier resources.



        if ($request->hasFile('fichier1')) {
            $attachment = $request->file('fichier1');
            $sponsorImageSaveAsName = time() . "as" . "-file." . $attachment->getClientOriginalExtension();


            $upload_path = 'uploads/attachments/';
            $filename = $upload_path . $sponsorImageSaveAsName;
            $attachment->move($upload_path, $sponsorImageSaveAsName);
        } else {
        }


        // Selection de tous les visiteurs à qui doit on envoyer les mails.
        $visitors = DB::select("select * from visiteurs");


        // La fonction pour l'envoie des mails.
        $mail = new PHPMailer(true);

        try {



            $objet = $request->input('objet');
            $message = $request->input('message');
            $title = $request->input('title');

            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->CharSet = "utf-8"; // set charset to utf8
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted

            $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
            $mail->Port = 587; // TCP port to connect to
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->isHTML(true); // Set email format to HTML
            $mail->Username = "contact.ask.avocats@gmail.com";
            $mail->Password = "pnrgbpqqsyavkyel";



            $mail->SetFrom('contact.ask.avocats@gmail.com', 'ASK-AVOCATS');
            $mail->Subject = '' . $objet . '';
            $mail->Body = "<h2>" . $title . "</h2>
                                       <p>" . $message . "</p>";
            if (!empty($attachment)) {

                $mail->AddAttachment($filename);
            } else {
            }
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            foreach ($visitors as $key => $visitor) {

                $mail->AddBCC($visitor->email_visiteur, 'moi');
                $mail->addAddress(' ' . $visitor->email_visiteur . ' ', 'moi');
            }


            $mail->Send();
            return redirect()->route('newsletter')->with('success', 'Vous avez envoyé ce mail à tous les visiteurs enregistrés');
        } catch (Exception $e) {

            return redirect()->route('newsletter')->with('error', 'Sorry, error');
        }
    }

    public function newVisitor(Request $request)
    {
        $email = $request->input('email_visiteur');

        include_once 'verifications.php';

        $vmail = new verifyEmail();
        $vmail->setStreamTimeoutWait(20);
        $vmail->Debug = FALSE;
        $vmail->Debugoutput = 'html';
        $vmail->setEmailFrom('contact.ask.avocats@gmail.com');

        $e = strval($email);

        if ($vmail->check($e)) {

            $visitor = DB::select('select * from visiteurs where email_visiteur=?', [$email]);

            if (empty($visitor)) {

                visiteurs::create($request->all());

                ///////////////////////// ENVOI AUTOMAATIQUE D'UN MAIL AU VISITEUR

                $mail = new PHPMailer(true);

                try {

                    $mail->isSMTP(); // Set mailer to use SMTP
                    $mail->CharSet = "utf-8"; // set charset to utf8
                    $mail->SMTPAuth = true; // Enable SMTP authentication
                    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted

                    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
                    $mail->Port = 587; // TCP port to connect to
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
                    $mail->isHTML(true); // Set email format to HTML
                    $mail->Username = "contact.ask.avocats@gmail.com";
                    $mail->Password = "pnrgbpqqsyavkyel";

                    $mail->SetFrom('contact.ask.avocats@gmail.com', 'ASK-AVOCATS');
                    $mail->Subject = 'Bienvenu';
                    $mail->Body = "<h1>Bienvenu chez ASK AVOCATS !</h1>
                                               <p><img src=\"https://ask-avocats.com/public/assets/img/asksite.png\" /></p>";
                    $mail->addAddress(' ' . $email . ' ', '');

                    $mail->Send();

                    return redirect()->back()->with('success', 'Vous faites désormais partie de la famille !');
                } catch (Exception $e) {

                    return redirect()->back()->with('error', 'Veuillez réesseyer');
                }
            } else {
                return redirect()->back()->with('error', 'Cet Email est déjà utilisé !');
            }
        } elseif (verifyEmail::validate($e)) {

            return redirect()->back()->with('error', "Email Invalide !");
        } else {

            return redirect()->back()->with('error', "Veuillez utilisé un autre email");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
