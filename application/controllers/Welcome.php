<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
/**
* @property usuario $usuario Classe de usuário
* @property Doctrine $doctrine Biblioteca ORM
*/
class Welcome extends CI_Controller
{
public function index()
{
$this->load->model('Entities/usuario', 'usuario');
$this->usuario->nome = 'Tawan Carvalho';
$this->usuario->email = 'tawcesar26@hotmail.com';
$this->usuario->telefone = '';
$this->usuario->celular = '81-995525-4180';
$this->doctrine->em->persist($this->usuario);
 $this->doctrine->em->flush();
 }
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */