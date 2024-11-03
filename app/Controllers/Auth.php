<?php

namespace App\Controllers;

use App\Models\Administrateur;
use App\Models\PasswordResset;
use Carbon\Carbon;
use DateTime;

class Auth extends BaseController
{
    public function __construct() {
        $admin_model = new Administrateur();
        $session = session(); 
    }

    public function login()
    {
        helper('form');
        $data = $this->request->getPost(['username', 'password']);

        if (! $this->validateData($data, [
            'username'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => "Merci de saisir votre nom d'utilisateur",
                ],
            ],
            'password'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => "Merci de saisir votre mot de passe",
                ],
            ],
        ])) {
            // The validation fails, so returns the form with all errors.
            return view('admin/auth_login', [
                'errors' => $this->validator->getErrors(),
                'title'  => 'Login | Se Connecter',
            ]);
        }

        
        // Gets the validated data.
        $post = $this->validator->getValidated();

        $admin_model = new Administrateur(); 
        $admin= $admin_model->where('username_admin', $data['username'])
                           ->get()->getResultArray();

        if(count($admin) == 1 && password_verify($data['password'], $admin[0]['password_admin'])) {
            $session = session();

            $admin_data = [
                'id'  => $admin[0]['id_administrateur'],
                'username'  => $admin[0]['username_admin'],
                'nom'  => $admin[0]['nom_admin'],
                'prenom'  => $admin[0]['prenom_admin'],
                'creation_date'  => $admin[0]['admin_created_at'],
                'admin_logged_in' => true,
            ];
            
            $session->set($admin_data);

            return redirect()->to('admin/home')->with('success', "Connexion avec success");
            
        }else {
            # code...
            return redirect()->to(base_url('auth/login'))->with('error', "Email ou mot de passe invalide");
        }
        
    }

    public function logout(){

        $session = session();
        $session->destroy();
        $session->close();
        
        return redirect()->to('auth/login');

    }

    public function forgot_password(){
        helper('form');
        $session = session();
        $admin_email = $this->request->getPost(['email'], FILTER_SANITIZE_EMAIL);
        if (! $this->validateData($admin_email, [
            'email'    => [
                'rules'  => 'required|valid_email|is_not_unique[administrateur.admin_email]',
                'errors' => [
                    'required' => 'Merci de saisir votre adresse email',
                    'is_not_unique' => 'Cette adresse email n\'est associé à aucun compte.',
                    'valid_email' => 'Merci de saisir une adresse email valide',
                ],
            ],
        ]))  {
            // The validation failed.
            return view('admin/auth_forgot_password', [
                'errors' => $this->validator->getErrors(),
                'title'  => 'Récuperation | Mot de Passe',
            ]);
        }

        $admin_model = new Administrateur(); 
        $admin_found = $admin_model->where('admin_email', $admin_email)->first();
        
        if($admin_found) {
            
            $email = service('email');
            $token = bin2hex(openssl_random_pseudo_bytes(50));
            $message = view('./admin/template/email_template', [
                'token' => $token,
            ]);
            $email->setTo($admin_email);
            $email->setFrom(env('EMAIL_FROM'), env('EMAIL_FROM_NAME'),);
            $email->setSubject('DEMANDE DE MODIFICATION DE MOT DE PASSE POUR ' . strtoupper($admin_found['nom_admin']));
            $email->setMessage($message);

            if($email->send()){
                $data = [
                    '#user_id'         => $admin_found['id_administrateur'],
                    'user_role'        => 'administrateur',
                    'reset_link'       => $token,
                    'reset_link_date'  => Carbon::now() //date("Y-m-d H:i:s")
                ];

                $reset_password = new PasswordResset();
                $reset_password_exist = $reset_password->where('#user_id', $admin_found['id_administrateur'])->first();
                
                if($reset_password_exist === NULL)
                    $reset_password->insert($data);
                else {
                    # code...
                    $reset_password->set('reset_link', $token);
                    $reset_password->set('reset_link_date', Carbon::now());
                    $reset_password->where('#user_id', $admin_found['id_administrateur']);
                    $reset_password->update();
                }
                return redirect()->to(base_url('auth/forgot_password'))->with('success', "Email envoyé avec success");
            }else {
                # code...
                return redirect()->to(base_url('auth/forgot_password'))->with('error', "Une erreur est survenue, Merci de reesayer");
            }
        }else {
            # code...
            return redirect()->to(base_url('auth/forgot_password'))->with('error', "Une erreur est survenue, Merci de reesayer");
        }

        return view('admin/auth_forgot_password',[
            'title'  => 'Récuperation | Mot de Passe',
        ]);
    }

    public function reset_password($token = null){
        helper('form');
        if(!isset($token)){
            return redirect()->to(base_url('auth/login'))->with('error', "Accès non autorisé");
        }else {
            # code...

            $Password_resset = new PasswordResset();
            $Password_resset_manager = $Password_resset->where('reset_link', $token) ->get()->getRowArray();
            
            if($Password_resset_manager === NULL)
                return redirect()->to(base_url('auth/login'))->with('error', "Lien de réinitialisation de mot de passe invalide");
            else {
                # code...
                $verify_reset_link_date = Carbon::createFromFormat('Y-m-d H:i:s',$Password_resset_manager['reset_link_date'])
                                        ->diffInMinutes(Carbon::now());
               

                if($verify_reset_link_date > 15)
                    return redirect()->to(base_url('auth/login'))->with('error', "Ce lien de réinitialisation à expiré");
                else {
                    # code...
                    $new_password = $this->request->getPost(['password', 'password2']);

                    if (! $this->validateData($new_password, [
                        'password'    => [
                            'rules'  => 'required|min_length[6]',
                            'errors' => [
                                'required' => 'Merci de saisir le nouveau mot de passe',
                                'min_length' => 'le mot de passe doit contenir plus de 6 caracteres',
                            ],
                        ],
                        'password2'    => [
                            'rules'  => 'required|matches[password]|min_length[6]',
                            'errors' => [
                                'required' => 'Merci de ressaisir le nouveau mot de passe',
                                'min_length' => 'le mot de passe doit contenir plus de 6 caracteres',
                                'matches' => 'Les mots de passes ne correspondent pas',
                            ],
                        ],
                    ]))  {
                        // The validation failed.
                        return view('admin/auth_reset_password', [
                            'errors' => $this->validator->getErrors(),
                            'token'  => $token,
                            'title'  => 'Récuperation | Mot de Passe',
                        ]);
                    }
 
                    // Create Object from Model Class
                    $admin_model = new Administrateur(); 
                    $reset_password_manager = new PasswordResset();

                    // Hash the admin password
                    $new_admin_password = password_hash($new_password['password'], PASSWORD_DEFAULT);
                    $update_password = $reset_password_manager->where('reset_link', $token)->first();
                    

                    // Update the admin password
                    $admin_model->set('password_admin',$new_admin_password);
                    $admin_model->where('id_administrateur',$update_password['#user_id']);
                    $is_upadate = $admin_model->update();

                    if($is_upadate)
                        return redirect()->to(base_url('auth/reset_password/'.$token))->with('success', "Mot de passe modifié avec succèss");
                    else
                        return redirect()->to(base_url('auth/reset_password/'.$token))->with('error', "Une erreur est survenue, Merci de reessayer");

                    return view('admin/auth_reset_password',[
                        'token'  => $token,
                        'title'  => 'Récuperation | Mot de Passe',
                    ]);
                }
            }
           
        }
        
    }

}
