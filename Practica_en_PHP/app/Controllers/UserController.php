<?php

namespace App\Controllers;
use App\Models\BookModel;
use App\Models\AuthorModel;

class UserController extends BaseController
{
    public function index()
    {
        $libro = new BookModel();
        $datos['libros']= $libro->orderBy('id','ASC')->findAll();
        $data['pageTitle'] = 'Home';
        return view('dashboard/home',$datos,$data);
    }
    public function ListAuthor(){
        $author = new AuthorModel();
        $datos['autores'] = $author->orderBy('id','ASC')->findAll();
        $data['pageTitle'] = 'ListAuthor';
        return view('dashboard/author',$datos,$data);
    }
    public function DetalleBook(){
        return view('dashboard/detalleBook');
    }
    public function eliminar($id=null){
        // echo 'Borrar registro'.$id;
        $libro = new BookModel();
        $datosLibro = $libro->where('id',$id)->first();
        $libro->where('id',$id)->delete($id);
        return $this->response->redirect(site_url('/user/home'));

    }
    public function editar($id=null){
        //print_r($id);
        $libro = new BookModel();
        $datos['libro']=$libro->where('id',$id)->first();
        return view('pages/editBook',$datos);
    }
    public function actualizarLibro(){
        $libro = new BookModel();
        $datos=[
            'Nombre'=>$this->request->getVar('inputNombre'),
            'Fecha_publicacion'=>$this->request->getVar('inputFpublicacion'),
            'Edicion'=>$this->request->getVar('inputEdicion'),
            'Autor_id'=>$this->request->getVar('inputAutor')
        ];
        $id= $this->request->getVar('inputId');
        $libro->update($id,$datos);
        return $this->response->redirect(site_url('/user/home'));
    }
    public function addBook(){
        $data['pageTitle'] = 'Add Book';
        return view('dashboard/addBook',$data);
    }
    public function addAuthor(){
        $data['pageTitle'] = 'Add Author';
        return view('dashboard/addAuthor',$data);
    }
    public function guardarLibro(){
        $libro = new BookModel();

        $datos=[
            'Nombre'=>$this->request->getVar('inputNombre'),
            'Fecha_publicacion'=>$this->request->getVar('inputFpublicacion'),
            'Edicion'=>$this->request->getVar('inputEdicion'),
            'Autor_id'=>$this->request->getVar('inputAutor')
        ];
        $libro->insert($datos);
        return $this->response->redirect(site_url('/user/home'));
    }
    public function guardarAuthor(){
        $author = new AuthorModel();
        $datos=[
            'Nombre'=>$this->request->getVar('inputNombre'),
            'Apellido'=>$this->request->getVar('inputApellido'),
            'Pais'=>$this->request->getVar('inputPais'),
            'Fecha_registro'=>$this->request->getVar('inpuRegistro'),
            'Cantidad_libros'=>$this->request->getVar('inputClibros')
        ];
        $author->insert($datos);
        redirect('dashboard/home', 'refresh');
        //echo 'Ingresado a la db';
    }

    // function validateBookData($name, $publishDate, $edition, $author) {
    //     $errors = array();
    //     if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
    //         $errors[] = 'Invalid name';
    //     }
    //     if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $publishDate)) {
    //         $errors[] = 'Invalid date format';
    //     }
    //     if (!preg_match('/^[0-9]+$/', $edition)) {
    //         $errors[] = 'Invalid edition';
    //     }
    //     if (!preg_match('/^[a-zA-Z\s]+$/', $author)) {
    //         $errors[] = 'Invalid author name';
    //     }
    //     return $errors;
    // }
    

}
